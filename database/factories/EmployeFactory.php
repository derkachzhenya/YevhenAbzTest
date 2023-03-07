<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class EmployeFactory extends Factory
{

    public function definition(): array
    {
        return [
            'firstName' => $this->faker->name(),
            'image' => $this->faker->imageUrl($width = 300, $height = 300),
            'number' => $this->faker->numberBetween($min = 1000000, $max = 9999999),
            'salary' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'mail' => $this->faker->unique()->safeEmail(),
            'position_id' => $this->faker->numberBetween(1,5),
            'head' => $this->faker->name(),
        ];
    }
}
