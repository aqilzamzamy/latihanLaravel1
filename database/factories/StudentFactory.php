<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classroom;

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
<<<<<<< HEAD
            'classroom_id' => \App\Models\Classroom::inRandomOrder()->first()->id ?? 1, 
            // Anda mungkin perlu memastikan Classroom ada sebelum Student dibuat
            // Hapus kolom 'grade' jika Anda menggunakan 'classroom_id'
            'grade' => fake()->randomElement(['11pplg1', '11pplg2', '11pplg3', '11pplg4', '11pplg5', '11pplg6']),
=======
            'classroom_id' => Classroom::factory(),
>>>>>>> 391d12ebfdc4015d2cbd7c1633a9434ce6f05612
        ];
    }
}