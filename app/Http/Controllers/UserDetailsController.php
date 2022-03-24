<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    //

    public function save(Request $request)
    {
dd($request->all());
// $UserDetails = new UserDetails;

// $UserDetails->user_name=$request->use_rname;
// $UserDetails->full_names=$request->fullnames;
// $UserDetails->id=$request->id;

// $UserDetails->save();

// return back()->with(['success'=>'saved']);

    }
}
