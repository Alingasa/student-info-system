<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'student_id',
         'firstname',
        'lastname',
        'email',
        'status',
       
    ];
    use HasFactory;
    // Student.php

    public function payments() {
        return $this->hasMany(Payment::class);
    }


}
