<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teracontroller extends Controller
{
  function tera(){
    $tera= tera::where("id",1)->get();
    return view("teraView", compact($tera));
    }
}
