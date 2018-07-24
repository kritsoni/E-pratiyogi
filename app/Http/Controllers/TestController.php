<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
     public function createtest(){

        return view('createtest');

     }
     
     public function Testindex(){

        return view('loggedin');

     }

}
