<?php

use App\Material;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MaterialsSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(MaterialLocationsSeeder::class);
  
//        $this->call(MaterialLocationsSeeder::class);
    }
}

