<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresellController extends Controller
{
    public function index(){
        return view("presell.index");
    }
    public function loss(){
        return view("presell.loss");
    }
}
