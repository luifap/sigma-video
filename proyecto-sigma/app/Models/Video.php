<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    public function cursos(){
        return $this->belongsToMany('App\Models\Curso');
    }
}
