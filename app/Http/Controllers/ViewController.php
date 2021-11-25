<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showkalkulator()
    {
        return view('kalkulator');
    }

    function resulthasil()
    {
        return view('hasil');
    }

    function showets()
    {
        return view('ets');
    }
}
