<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $content = $this->faker->paragraphs(asText: true);

        return [
            'title' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['pending', 'published']),
            'excerpt' => Str::limit($content, 150),
            'description' => $content,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'time_unity' => $this->faker->randomElement(['heure', 'demi-journée', 'jour', 'semaine', 'mois', 'année']),
            'category_id' => $this->faker->numberBetween(1, 6),
            'user_id' => $this->faker->numberBetween(1, 10),
            'city_id' => $this->faker->numberBetween(1, 10),
            'picture_1' => $this->faker->imageUrl(),
            'picture_2' => $this->faker->imageUrl(),
            'picture_3' => $this->faker->imageUrl(),
        ];
    }
}
