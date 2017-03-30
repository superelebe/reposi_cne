<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Article;
use Carbon\Carbon;


class WelcomeController extends Controller{
   public function index(){
   	$otro_banner = Banner::Activo();
   	$noticias = Article::orderBy('id','asc')->take(2)->get();
   	return view('welcome',compact('otro_banner','noticias'));
   	
   }
}
