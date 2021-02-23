<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ModuleController extends Controller
{
    function songlyrics()
    {
        return view('songlyrics');
    }
}
