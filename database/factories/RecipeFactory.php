<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'short_description' => $this->faker->realText($maxNbChars = 60),
            'description' => $this->faker->text(),
            'image' => $this->faker->imageUrl(640, 480),
            'category_id' => $this->faker->numberBetween(1, 5),
            'user_id' => $this->faker->numberBetween(1, 3),
            'is_active' => 0,
            'is_best' => 0,
            'view_count' => $this->faker->numberBetween(1, 300),
            'materials' => 'goshte ghermez - sabzi kari - advie bemizane lazem - roghan 300gr - morgh 2kg'
        ];
    }
}
