<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'title' => implode(" ", $this->faker->words($nb = 3, $asText = false)),
            'isbn' => $this->faker->isbn13,        
            'pages' => $this->faker->numberBetween($min = 50, $max = 405),
            'released' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'value' => $this->faker->numberBetween($min = 5, $max = 29),
            'cost' => $this->faker->numberBetween($min = 5, $max = 29),
            'edition' => $this->faker->numberBetween($min = 1, $max = 10),
            'ref_author_id' => Author::all()->random(1)->first()->id,
            'ref_genre_id' => Genre::all()->random(1)->first()->id
        ];
    }
}

