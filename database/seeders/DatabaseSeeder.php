<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // StudentSeeder::class,
            GuardianSeeder::class,
            ClassroomSeeder::class,
        ]);
        
<<<<<<< HEAD
        Subject::factory(5)
        // ->hasTeacher() 
        ->create();
=======
        Subject::factory()->count(5)->create();

>>>>>>> 705bd9b88e8fc62321ddf2966e0ac4312e0ea7b7
    }
}
