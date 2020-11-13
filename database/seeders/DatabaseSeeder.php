<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AuthorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GenreSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BookSeeder::class);
        // $this->call(InventorySeeder::class);

    }
}
