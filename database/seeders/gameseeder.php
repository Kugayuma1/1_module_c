<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class gameseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            [
                'title' => 'Demo Game 1',
                'thumbnail' => 'demo_thumbnail_1.jpg',
                'slug' => 'demo-game-1',
                'description' => 'This is demo game 1',
                'author' => 'dev1',
                ],
                [
                'title' => 'Demo Game 2',
                'thumbnail' => 'demo_thumbnail_2.jpg',
                'slug' => 'demo-game-2',
                'description' => 'This is demo game 2',
                'author' => 'dev2',
                ],
        ]);
    }
}
