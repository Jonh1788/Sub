<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogarController extends Controller
{
    public function index(){
        return view("jogar.index");
    }
}
