<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'username' => 'admin1',
                'password' => hash::make('hellouiverse1!',)
            ],
            [
                'username' => 'admin2',
                'password' => hash::make('hellouiverse2!',)
            ],
        ]);
    }
}
