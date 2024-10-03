<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class revacontroller extends Controller
{
    function reva(){
        $reva = reva::where("id",1)->get();
        return view("revaview", compact($reva));
    }
}
