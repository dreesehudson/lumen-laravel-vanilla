<?php

namespace Database\Factories;

use Faker\DefaultGenerator;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventory;
use App\Models\Book;
use App\Models\User;
use phpDocumentor\Reflection\Types\Nullable;

class InventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'checked_out' => false,
            'ref_book_id' => Book::all()->random(1)->first()->id,
        ];
    }
}
