<?php

namespace Database\Factories;

use App\Models\employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\joblist>
 */
class joblistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "employer_id" => employer::factory(),
            "title" => fake()->jobTitle(),
            "salary" => fake()->randomElement(['$60,000', '$65,000', '$70,000']),
            "rating" => fake()->randomFloat(1, 1, 5),
            "location" => fake()->randomElement(["On-site", "Remote", "hybrid"]),
            "schedule" => fake()->randomElement(['Full Time', 'Part Time', 'Day Shift', 'Evening Shift', 'Night Shift']),
            "url" => fake()->url(),
        ];
    }
}
