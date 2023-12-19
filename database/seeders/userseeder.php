<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'player1',
                'password' => Hash::make('helloworld1!'),
            ],
            [
                'username' => 'player2',
                'password' => Hash::make('helloworld2!'),
            ],
            [
                'username' => 'dev1',
                'password' => Hash::make('hellobyte1!'),
            ],
            [
                'username' => 'dev2',
                'password' => Hash::make('hellobyte2!'),
            ],
        ]);
    }
}
