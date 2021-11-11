<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showForm(){
        //code untuk mengload data yang akan dimuat di form
        return view('showGreetings');
    }
    function resultGreetings(){
        //code untuk mengload data yang akan dimuat di form
        return view('tugas');

    }
}
