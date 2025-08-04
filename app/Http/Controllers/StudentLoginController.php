<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;



class StudentLoginController extends Controller
{
    public function StudentLogin()
    {   
        return view('website.frontend.student-login');
    }
    
     public function StudentRegister()
    {   
        return view('website.frontend.student-register');
    }
}
