<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TeacherController extends Controller
{
    //
    public function listT(){
        $teacher=['Karim','Asif','Jamil'];

        return view('teacher.list',compact('teacher'));

    }

    public function about()
    {
        return view('teacher.about');
    }
}
