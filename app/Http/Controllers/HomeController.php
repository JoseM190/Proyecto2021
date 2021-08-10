<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "Bienvenido a la pagina principal";
    }

    public function create(){
        return "Bienvenido a la pagina del Home";
    }

    public function show(){
        return "Bienvenido al curso : $home";
    }
}
