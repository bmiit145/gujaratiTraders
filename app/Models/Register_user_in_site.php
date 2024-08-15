<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register_user_in_site extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_surname',
        'mobile_number',
        'email',
        'is_reference',
    ];
}
