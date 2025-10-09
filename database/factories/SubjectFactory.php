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
            'name' => fake()->unique()->randomElement([
                'Web Development',
                'Desktop Development',
                'Informatika',
                'Game Development',
                'Mobile Development',
            ]),
            'description' => fake()->sentence(5),
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
