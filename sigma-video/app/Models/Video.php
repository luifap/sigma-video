<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function cursos(){
        return $this->belongsToMany(Curso::class,'curso_video');
    }

    public function users(){
        return $this->belongsToMany(User::class,'video_user');
    }


}
