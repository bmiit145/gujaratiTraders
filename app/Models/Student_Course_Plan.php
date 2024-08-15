<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Course_Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_course_type',
        'student_course_amount',
        'student_course_description',
        'student_course_total',
        'course_plan_start_date',
        'course_plan_expiry_date',
    ];

}
