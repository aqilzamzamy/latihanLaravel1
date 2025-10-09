<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('email')->unique();
            $table->date('date_of_birth');  
            $table->String('gender');
            $table->String('address');
<<<<<<< HEAD
=======
            $table->string('grade');
>>>>>>> 705bd9b88e8fc62321ddf2966e0ac4312e0ea7b7

            $table->integer('classroom_id');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
