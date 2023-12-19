<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class game_versionseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('game_versions')->insert([
            [
                'game' => 'Demo Game 1',
                'version_timestamp' => now(),
                'storage_path' => 'demo-game-1-v1/',
            ],
            [
                'game' => 'Demo Game 1',
                'version_timestamp' => now(),
                'storage_path' => 'demo-game-1-v2/',
            ],
            [
                'game' => 'Demo Game 2',
                'version_timestamp' => now(),
                'storage_path' => 'demo-game-2-v1/',
            ],
        ]);
    }
}
