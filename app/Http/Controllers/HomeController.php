<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function resume()
    {
        return view('menus.resume');
    }
    public function proyectos()
    {
        return view('menus.proyectos');
    }
    public function conocimientos()
    {
        return view('menus.conocimientos');
    }
    public function educacion()
    {
        return view('menus.educacion');
    }
    
}
