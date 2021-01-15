<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateProjectController extends Controller
{
    public function SProject(){
        return view('ProjectPage/StudentProjectPage');      }

    public function LProject(){
        return view('ProjectPage/LecturerProjectPage');      }
}
