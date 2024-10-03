<?php

namespace App\Http\Controllers;

use App\Models\aurel;
use Illuminate\Http\Request;

class AurelController extends Controller
{
    function Aurel(){ //web besar diarahin pke route, slash apa panggil function apa??? 
        $aurel = aurel::where("id",1)->get(); //$variabel, dimana select * from aurel kolom 1
        return view("AurelView", compact($aurel)); // nejalain view, target nya kemana, datanya yg dikirim apa?
    }
}
