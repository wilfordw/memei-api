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
      $this->call(UsersTableSeeder::class);
      $this->call(CatagoriesSeeder::class);
      $this->call(AuthorsSeeder::class);
      $this->call(CardsSeeder::class);
      $this->call(PhotosSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
