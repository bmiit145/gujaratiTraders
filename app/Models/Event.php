<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'event_start_date',
        'event_end_date',
        'event_location',
        'event_description',
        'is_delete',
        'total_registered_users',
        'event_registered_limit',
    ];
}
