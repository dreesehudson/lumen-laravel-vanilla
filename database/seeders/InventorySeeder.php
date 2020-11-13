<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Author::factory()->count(25)->create();
        App\Models\Book::factory()->count(100)->create();

        $bookCount = 100;
        for($i = 1; $i <= $bookCount; $i++){
            DB::table('books')->insert([
                'ref_author_id' => rand(1, 25),
                'ref_genre_id' => rand(1, 10)
            ]);
        }







        return Book::factory()->times(50)->create();
    }
}
