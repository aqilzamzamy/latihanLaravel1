<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
        'name', 
        'email', 
        'address', 
        'classroom_id', 
        'grade',
        'date_of_birth'
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class); 
    }
}
=======
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
>>>>>>> 391d12ebfdc4015d2cbd7c1633a9434ce6f05612
