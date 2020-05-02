<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function welcome2() {


        
        return view('homepage');
    }
    

     
    public function about(){


        return view('about');
    }




    public function services(){


        return view('services');
    }

}
