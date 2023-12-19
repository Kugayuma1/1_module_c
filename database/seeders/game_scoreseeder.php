<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class game_scoreseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('game_scores')->insert([
            [
                'user' => 'player1',
                'game_version_id' => 1,
                'timestamp' => now(),
                'score' => 10.0,
            ],
            [
                'user' => 'player1',
                'game_version_id' => 1,
                'timestamp' => now(),
                'score' => 15.0,
            ],
            [
                'user' => 'player1',
                'game_version_id' => 2,
                'timestamp' => now(),
                'score' => 12.0,
            ],
            [
                'user' => 'player2',
                'game_version_id' => 2,
                'timestamp' => now(),
                'score' => 20.0,
            ],
            [
                'user' => 'player2',
                'game_version_id' => 3,
                'timestamp' => now(),
                'score' => 30.0,
            ],
            [
                'user' => 'dev1',
                'game_version_id' => 2,
                'timestamp' => now(),
                'score' => 1000.0,
            ],
            [
                'user' => 'dev1',
                'game_version_id' => 2,
                'timestamp' => now(),
                'score' => -300.0,
            ],
            [
                'user' => 'dev2',
                'game_version_id' => 2,
                'timestamp' => now(),
                'score' => 5.0,
            ],
            [
                'user' => 'dev2',
                'game_version_id' => 3,
                'timestamp' => now(),
                'score' => 200.0,
            ],
        ]);
    }
}
