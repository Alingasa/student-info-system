<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id',
        'teacher_id',
         'firstname',
        'lastname',
        'email',
        'status',
    ];
    use HasFactory;
}
