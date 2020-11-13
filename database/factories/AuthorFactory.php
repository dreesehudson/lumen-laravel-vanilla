<?php
namespace Database\Factories;
use App\Models\Author;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}