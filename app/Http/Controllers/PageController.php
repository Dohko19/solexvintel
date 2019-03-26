<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;

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

    public function store(Request $request)
    {
        $contacto = new Contacto;
        $contacto->nombre = $request->get('nombre');
        $contacto->email = $request->get('email');
        $contacto->asunto = $request->get('asunto');
        $contacto->mensaje = $request->get('message');
        $contacto->save();

        return redirect()->route('contacto')->with('info', 'Hemos Recibido tu mensaje');
    }
}
