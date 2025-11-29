<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'date_of_birth' => fake()->date(),
            'address' => fake()->address(),
            'gender' => fake()->randomElement(['male', 'female']),
            'classroom_id' => \App\Models\Classroom::inRandomOrder()->first()->id ?? 1, 
            // Anda mungkin perlu memastikan Classroom ada sebelum Student dibuat
            // Hapus kolom 'grade' jika Anda menggunakan 'classroom_id'
            'grade' => fake()->randomElement(['11pplg1', '11pplg2', '11pplg3', '11pplg4', '11pplg5', '11pplg6']),
        ];
    }
}