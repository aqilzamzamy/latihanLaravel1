<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    //login
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory()->count(5)->create();
        // Student::updateOrCreate(
        //     [
        //         'id' => 1,
        //         'name' => "Arsya Muhammad Faisyar",
        //         'grade' => '10 pplg 3',
        //         'email' => 'afaisyar@gmail.com',
        //         'alamat' => 'demaan',
        //         'birthday' => '2025/08/07',
        //         'gender' => 'laki'
        //     ]
        // );
        // Student::updateOrCreate(
        //     [
        //         'id' => 2,
        //         'name' => "Amir Fattah",
        //         'grade' => '10 pplg 3',
        //         'email' => 'detarune@gmail.com',
        //         'alamat' => 'Gebog',
        //         'birthday' => '2025/06/07',
        //         'gender' => 'laki'
        //     ]
        // );
        // Student::updateOrCreate(
        //     [
        //         'id' => 3,
        //         'name' => "Fahmi",
        //         'grade' => '10 pplg 2',
        //         'email' => 'lavender@gmail.com',
        //         'alamat' => 'Rembang',
        //         'birthday' => '2025/01/07',
        //         'gender' => 'laki'
        //     ]
        // );
        // Student::updateOrCreate(
        //     [
        //         'id' => 4,
        //         'name' => "Kovi",
        //         'grade' => '10 pplg 3',
        //         'email' => 'minumkovi@gmail.com',
        //         'alamat' => 'Jogja',
        //         'birthday' => '2008/12/11',
        //         'gender' => 'perempuan'
        //     ]
        // );

        // [
        //     'id' => 2,
        //     'name' => "Muhammad Amir Fatah",
        //     'grade' => '10 pplg 1',
        //     'email' => 'detarune@gmail.com',
        //     'alamat' => 'Gebog',
        //     'birthday' => '2025/08/07',
        //     'gender' => 'laki'
        // ],
        // [
        //     'id' => 3,
        //     'name' => "Fawas",
        //     'grade' => '10 pplg 3',
        //     'email' => 'fawas@gmail.com',
        //     'alamat' => 'mlati',
        //     'birthday' => '2025/08/07',
        //     'gender' => 'laki'
        // ],
        // [
        //     'id' => 4,
        //     'name' => "Adit",
        //     'grade' => "10 pplg 4",
        //     'email' => 'adit@gmail.com',
        //     'alamat' => 'megawon',
        //     'birthday' => '2025/08/07',
        //     'gender' => 'laki'
        // ],
        // [
        //     'id' => 5,
        //     'name' => "Rafa",
        //     'grade' => '10 pplg 1',
        //     'email' => 'rafa@gmail.com',
        //     'alamat' => 'dawe',
        //     'birthday' => '2024/09/09',
        //     'gender' => 'laki'
        // ],
        // );
    }
}
