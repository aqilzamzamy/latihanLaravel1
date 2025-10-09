<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classroom::factory(6)
<<<<<<< HEAD
        ->hasStudents(5) 
=======
        ->hasStudents(5) // 4 kelas, masing-masing punya 5 student
>>>>>>> 705bd9b88e8fc62321ddf2966e0ac4312e0ea7b7
        ->create();
    }
}
