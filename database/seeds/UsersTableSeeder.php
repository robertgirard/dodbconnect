<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bill Johnson',
            'email' => 'wj@gmail.com',
            'password' => Hash::make('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Lauren IngridD Girard',
            'email' => 'lig@gmail.com',
            'password' => Hash::make('1234567')
        ]);
    }
}
