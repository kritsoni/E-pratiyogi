<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EPYogiController extends Controller
{
    //

    public function makeReg()
    {
        return view('EPYogi.registration');
    }
    public function login()
    {
        return view('EPYogi.login');
    }
    
}
