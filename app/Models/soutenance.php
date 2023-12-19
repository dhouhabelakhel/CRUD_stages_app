<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soutenance extends Model
{
    use HasFactory;
    protected $fillable=[
'numjury',
'note',
'datesoutenance',
'student_id',
'enseg_id'
    ];
}
