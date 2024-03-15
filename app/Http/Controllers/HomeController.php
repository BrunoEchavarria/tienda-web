<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
        return view('abotUs.about');
    }

    public function products(){
        return view('products.products');
    }
}