<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
   
    public function home()
    {
       return view('utils/home'); 
    }
    public function home1()
    {
        $this->middleware('auth');
        return view('utils/home1');

    }

}
