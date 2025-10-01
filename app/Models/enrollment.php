<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class enrollment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'enrollment_id';

    protected $fillable = [
        'tenant_id',
        'course_id',
        'student_id',
        'enrollment_date',
    ];
}
