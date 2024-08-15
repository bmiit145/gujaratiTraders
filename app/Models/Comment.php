<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'video_id',
        'student_id',
        'student_name',
        'student_email',
        'comment',
        'is_delete',
    ];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

}
