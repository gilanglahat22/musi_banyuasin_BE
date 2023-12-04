<?php

namespace App\Http\Controllers;

use App\Models\PaslonPutri;
use App\Models\VoteCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaslonPutriController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table('paslon_putris')
                ->orderBy('count_vote','desc')
                ->get();

        return response()->json($data);
    }

    public function show(PaslonPutri $paslonPutri)
    {
        return response()->json($paslonPutri);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'count_vote' => 'required|integer',
        ]);

        $paslon = PaslonPutri::create($request->all());

        $countPaslon = VoteCount::find(1);
        $countPaslon->count_vote_girl += $paslon->count_vote;
        $countPaslon->save();
        
        return response()->json(['data' => $paslon,
                                'message' => "New Data has been store"]);
    }

    public function update(Request $request, PaslonPutri $paslonPutri)
    {
        $request->validate([
            'count_vote' => 'required|integer',
        ]);

        $selisih = $request->count_vote - $paslonPutri->count_vote;
        $paslonPutri->count_vote = $request->count_vote;
        $countPaslon = VoteCount::find(1);
        $countPaslon->count_vote_girl += $selisih;
        $paslonPutris = PaslonPutri::where('id','!=',$paslonPutri->id)->get();
        foreach($paslonPutris as $paslon){
            $paslon->persentase = ($paslon->count_vote*100)/$countPaslon->count_vote_girl;
            $paslon->save();
        }
        $paslonPutri->persentase = ($paslonPutri->count_vote* 100)/$countPaslon->count_vote_girl;
        $paslonPutri->save();
        $countPaslon->save();
        return response()->json(['data' => $paslonPutri,
                                'message' => 'Count vote girl now is '. $countPaslon->count_vote_girl]);
    }

    public function destroy(PaslonPutri $paslonPutri)
    {
        $paslonPutri->delete();
        return response()->json(['message' => 'Data for paslon putri has been deleted']);
    }
}
