<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Article;
use App\User;
use Carbon\Carbon;


class WelcomeController extends Controller{
   public function index(){
   	$otro_banner = Banner::Activo();
   	$noticias = Article::orderBy('id','asc')->take(2)->get();
   	return view('welcome',compact('otro_banner','noticias'));
   	
   }

   public function afiliados(){
   		$afiliados = User::Afiliados()->paginate(6);
   		return view('afiliados.index', compact('afiliados'));
   }
   public function detalleAfiliado($id, Request $request){
      $afiliado = User::findOrfail($id);
      return view('afiliados.detalle_afiliado', compact('afiliado'));
   }
}
