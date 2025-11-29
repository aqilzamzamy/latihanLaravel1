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
            
            // --- Perubahan di Sini: Membuat kolom opsional ---
            $table->date('date_of_birth')->nullable(); 
            $table->String('gender')->nullable();      
            $table->String('address');
<<<<<<< HEAD
            $table->string('grade')->nullable();
=======
<<<<<<< HEAD
=======
            $table->string('grade');
>>>>>>> 705bd9b88e8fc62321ddf2966e0ac4312e0ea7b7
>>>>>>> 391d12ebfdc4015d2cbd7c1633a9434ce6f05612

            $table->integer('classroom_id');
            // ...
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
