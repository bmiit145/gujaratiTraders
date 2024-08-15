<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PythonApp extends Model
{
    use HasFactory;

    protected $table = 'python_app_logs';

    protected $fillable = [
        'public_ip',
        'expire_time',
        'status',
    ];
}
