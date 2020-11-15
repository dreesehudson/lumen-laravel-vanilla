<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Author::factory()->count(25)->create();
        // Book::factory()->count(100)->create();

        // $bookCount = 100;
        // for($i = 1; $i <= $bookCount; $i++){
        //     DB::table('books')->insert([
        //         'ref_author_id' => rand(1, 25),
        //         'ref_genre_id' => rand(1, 10)
        //     ]);
        // }

        return Inventory::factory()->times(10)->create();
    }
}
