<?php

namespace Database\Seeders;

use App\Models\VoteCount;
use Illuminate\Database\Seeder;

class VoteCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VoteCount::create([
            'count_vote_men' => 0,
            'count_vote_girl' => 0,
        ]);
    }
}
