<?php

namespace App\Http\Controllers;

use App\Models\PaslonPutra;
use App\Models\VoteCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaslonPutraController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table('paslon_putras')
                ->orderBy('count_vote','desc')
                ->get();

        return response()->json($data);
    }

    public function show(PaslonPutra $paslonPutra)
    {
        return response()->json($paslonPutra);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'count_vote' => 'required|integer',
        ]);

        $paslon = PaslonPutra::create($request->all());
        $countPaslon = VoteCount::find(1);
        $countPaslon->count_vote_men += $paslon->count_vote;
        $countPaslon->save();
        return response()->json(['data' => $paslon,
                                'message' => "New Data has been store"]);
    }

    public function update(Request $request, PaslonPutra $paslonPutra)
    {
        $request->validate([
            'count_vote' => 'required|integer',
        ]);

        $selisih = $request->count_vote - $paslonPutra->count_vote;
        $paslonPutra->count_vote = $request->count_vote;
        $countPaslon = VoteCount::find(1);
        $countPaslon->count_vote_men += $selisih;
        $paslonPutras = PaslonPutra::where('id','!=',$paslonPutra->id)->get();
        foreach($paslonPutras as $paslon){
            $paslon->persentase = ($paslon->count_vote*100)/$countPaslon->count_vote_men;
            $paslon->save();
        }
        $paslonPutra->persentase = ($paslonPutra->count_vote* 100)/$countPaslon->count_vote_men;
        $paslonPutra->save();
        $countPaslon->save();
        return response()->json(['data' => $paslonPutra,
                                'message' => 'Count vote men now is '. $countPaslon->count_vote_men]);
    }

    public function destroy(PaslonPutra $paslonPutra)
    {
        $paslonPutra->delete();
        return response()->json(['message' => 'paslon putra has been deleted']);
    }
}
