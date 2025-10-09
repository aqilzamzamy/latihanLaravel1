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
            'name' => $this->faker->unique()->word(),
            'description' => $this->faker->sentence(5),
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
