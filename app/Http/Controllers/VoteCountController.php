<?php

namespace App\Http\Controllers;

use App\Models\VoteCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoteCountController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table('vote_counts')
                ->get();
        
        return response()->json($data);
    }

    public function show(VoteCount $voteCount)
    {
        return response()->json($voteCount);
    }

    public function destroy(VoteCount $voteCount)
    {
        $voteCount->delete();
        return response()->json(['message' => 'The Data has been deleted']);
    }
}
