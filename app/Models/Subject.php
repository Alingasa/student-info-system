<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $primarykey = 'id';
    protected $fillable = [
        
         'course_id',
         'year',
         'semester',
        'start_date',
    ];
    use HasFactory;
    public function course()
    {
        return $this->belongsto(Course::class);
    }
    
}
