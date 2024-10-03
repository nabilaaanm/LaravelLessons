<?php

namespace App\Http\Controllers;

use App\Models\Nabila;
use Illuminate\Http\Request;

class NabilaController extends Controller
{
    function Nabila(){
        $nabila = Nabila::where("id",1)->get();
        
        return view("Nabilaview", compact(var_name:$nabila));
    }
}
