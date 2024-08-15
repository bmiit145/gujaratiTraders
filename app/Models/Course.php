<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'course_rate',
        'course_duration',
        'course_month_year',
        'course_month_year',
        'course_start_date',
        'course_expiry_date',
        'course_description',
        'course_image',
        'status',
        'is_delete',
    ];
}
