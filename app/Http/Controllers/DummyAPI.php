<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyAPI extends Controller
{
    //

    public function getData(){


        return ["name"=>'Tonny', "email"=>'tony@gmail.com',"password"=>'1234'];
    }
    public function index(){
        
    }
}
