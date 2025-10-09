<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subject;
use App\Models\Teacher;

class SubjectFactory extends Factory
{
    protected $model = Subject::class;

    public function definition(): array
    {
        return [
<<<<<<< HEAD
            'name' => $this->faker->unique()->word(),
            'description' => $this->faker->sentence(5),
=======
            'name' => fake()->unique()->randomElement([
                'Web Development',
                'Desktop Development',
                'Informatika',
                'Game Development',
                'Mobile Development',
            ]),
            'description' => fake()->sentence(5),
>>>>>>> 705bd9b88e8fc62321ddf2966e0ac4312e0ea7b7
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Subject $subject) {
            Teacher::factory()->create([
                'subject_id' => $subject->id,
            ]);
        });
    }
}
