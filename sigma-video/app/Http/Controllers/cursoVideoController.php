<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Video;
use Illuminate\Http\Request;

class cursoVideoController extends Controller
{
    public function index(){
        $video = Video::find(1);
        $curso = Curso::find(2);

        return view('welcome',compact('video','curso'));
    }
}
