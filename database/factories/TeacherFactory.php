<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subject;

class TeacherFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
<<<<<<< HEAD
            'subject_id' => Subject::factory(),
=======
            // 'subject_id' => Subject::factory(),
>>>>>>> 705bd9b88e8fc62321ddf2966e0ac4312e0ea7b7
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
        ];
    }
}
