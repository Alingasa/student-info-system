<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollments';
    protected $primarykey = 'id';
    protected $fillable = [
        'enrollment_no',
        'subject_id',
         'course_id',
        'student_id',
        'teacher_id',
        'join_date',
        'fee',
    ];
    use HasFactory;

    public function subject()
    {
        return $this->belongsto(Subject::class);
    }
    public function course()
    {
        return $this->belongsto(Course::class);
    }
    public function student()
    {
        return $this->belongsto(Student::class);
    }
    public function teacher()
    {
        return $this->belongsto(Teacher::class);
    }
    public function payment()
    {
        return $this->belongsto(Payment::class);
    }
  // Assuming you have a valid $subjectId, replace it with the actual subject ID you want to use

}


