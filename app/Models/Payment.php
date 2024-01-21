<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $primarykey = 'id';
    protected $fillable = [
        'enrollment_id',
       'payable',
       'refund',
       'paid_date',
       'paid',
   ];
    use HasFactory;

    public function enrollment(){
        return $this->belongsTo(Enrollment::class);
    }
}
