<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{

    function etsShow(){
        return view('ets');
    }
    function phpShowHTML(){
        return view ('assignphpHTML');
    }
    function phpShowPHP(){
        return view('assignphp');
    }
}
