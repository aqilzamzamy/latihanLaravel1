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
            $table->string('grade')->nullable();

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
