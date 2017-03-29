<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Banner;
use Noticias;
USE Convenios;


class WelcomeController extends Controller
{
    public function index(){
    	return view('welcome');
    }
}
