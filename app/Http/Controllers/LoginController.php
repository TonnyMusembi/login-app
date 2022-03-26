<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function addnames(){
        $logins = new Login();
        $logins->title="Welcome";
        $logins->body="home";

        $logins->save();



        return view('login')->with(['code'=>1,'msg'=>'success']);
    }


    public function showlogins(){
        return view('logins')->with(['data'=>Login::all()]);
    }

    public function edit($delete){

    }
}
