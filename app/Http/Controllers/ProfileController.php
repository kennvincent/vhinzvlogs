<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function displayprofiles(){
        //UPdated project
        //another update
        $profiles = Profile::all();
        return response()->json(['profiles'=>$profiles]);
    }
}
