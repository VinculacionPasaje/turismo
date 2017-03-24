<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolTableSeeder::class);
        $this->call(UserTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(MaterialTableSeeder::class);
         $this->call(TraerTableSeeder::class);
          $this->call(RedesTableSeeder::class);
    }
}
