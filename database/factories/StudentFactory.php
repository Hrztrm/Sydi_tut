<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            #'course' => 'AAA',
            'course' => $this->faker->sentence(),
            'DOB' => $this->faker->date(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'is_active' => $this->faker->boolean(),
            'university' => $this->faker->city(),
            #'name' => $this->faker->name();
        ];
    }
}
