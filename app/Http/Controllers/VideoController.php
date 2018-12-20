<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function home()
    {
        return view('admin.video.home');
    }

    public function convert()
    {
        return view('admin.video.video_convert');
    }
}
