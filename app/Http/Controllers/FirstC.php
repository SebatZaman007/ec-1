<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstC extends Controller
{
    public function contact()
    {
        return view('contact');
    }
}
