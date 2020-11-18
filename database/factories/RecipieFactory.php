<?php

namespace Database\Factories;

use App\Models\Recipie;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'title' => $this->faker->name,
            'instructions' => $this->faker->paragraph(rand(2,5)),
            'ingredients' => $this->faker->word,
            'time' => $this->faker->dayOfWeek,
            'servings' => $this->faker->sentence(rand(3,6),true),
            'nutrition' => $this->faker->sentence(rand(3,4),true),
            'type' =>$this->faker->randomElement(['Veg','Non-Veg']),
        ];
    }
}
