<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function course()
    {
    

        return view("dashboard.course");
    }

    public function java_enroll()
    {
    

        return view("dashboard.java_enroll");
    }


    public function data_science_enroll()
    {
    

        return view("dashboard.data_science_enroll");
    }
    
    public function Machine_learning_enroll()
    {

        
        return view("dashboard.Machine_learning_enroll");
    }



}