<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_register extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'country',
        'street address',
        'city',
        'state',
        'pincode',
        'phone',
        'email',
        'profile_image',
    ];
}
