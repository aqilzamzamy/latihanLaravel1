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
        
        Subject::factory(5)
        // ->hasTeacher() 
        ->create();
    }
}
