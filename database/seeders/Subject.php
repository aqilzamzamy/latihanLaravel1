<?php

namespace Database\Seeders;

use App\Models\Subject as ModelsSubject;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Subject extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsSubject::factory(5)->has(Teacher::factory(1))->create(); //akan mengambil data dari teacher factory untuk diurutkan di Model Subject
    }
}
