<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [''];
    public function videos(){
        return $this->belongsToMany(Video::class,'curso_video');
    }
}
