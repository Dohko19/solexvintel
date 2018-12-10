<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio()
    {
    	return view("index");
    }

    public function contacto()
    {
    	return view("contact");
    }

    public function blog()
    {
    	return view("blog");
    }

    public function portafolio()
    {
    	return view("portfolio");
    }

    public function services()
    {
    	return view("services");
    }

    public function about()
    {
    	return view("about");
    }
}
