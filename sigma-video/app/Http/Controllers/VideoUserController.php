<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoUserController extends Controller
{
    public function index(){

        $user = User::find(1);
        $video= Video::find(2);

        return view('curso_video.index',compact('user','video'));
    }
}


