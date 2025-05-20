<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $x = 1;
        $number = $x + 1;
        $user = User::whereRole('admin')->first();
        return [
            'sub_category_id' => SubCategory::inRandomOrder()->first()->id,
            'serialNumber' => $number,
            'description' => fake()->word(),
            'estimatedTime' => '3 Jam',
            'priority' => fake()->randomElement(['high', 'medium', 'low']),
            'manager_id' => $user->id
        ];
    }
}
