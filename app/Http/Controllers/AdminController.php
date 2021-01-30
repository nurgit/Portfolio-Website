<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashbord(){
        return view('admin.dashbord');
    }

    public function main(){
       // return view('admin.main');
    }

    public function services(){
        return view('admin.services');
    }

    public function portfolio(){
        return view('admin.portfolio');
    }

    public function about(){
        return view('admin.about');
    }

    public function contact(){
        return view('admin.contact');
    }

    
}
