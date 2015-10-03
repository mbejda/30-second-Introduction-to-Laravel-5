<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class helloController extends Controller
{

    public function hello()
    {
        return view('hello');
    }
}

