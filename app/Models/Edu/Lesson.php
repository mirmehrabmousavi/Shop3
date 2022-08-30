<?php

namespace App\Models\Edu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','l_file','l_video','l_free','season','l_course','user_id'
    ];
}
