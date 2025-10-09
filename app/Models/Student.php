<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'date_of_birth',
        'grade',
        'gender',
        'address',
        'classroom_id'
    ];

    // Relasi ke Classroom
    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }
}
