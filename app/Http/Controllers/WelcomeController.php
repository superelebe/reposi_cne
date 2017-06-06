<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Article;
use App\User;
use App\Calendar;
use App\Capacitacion;
use Carbon\Carbon;
use Mail;
use App\Mail\CorreoContactoAfiliado;


class WelcomeController extends Controller{
   public function index(){
   	$otro_banner     = Banner::Activo();
   	$noticias        = Article::orderBy('id','asc')->take(2)->get();
      $calendarios     = Calendar::CalendarActivo()->get(['title','start','url','id'])->toArray();
      $cursos          = Capacitacion::FechaActivo()->get(['title','start','url','id'])->toArray();
      $fechas         = array_merge($calendarios, $cursos);

   	return view('welcome',compact('otro_banner','noticias', 'fechas'));
   	
   }
   public function enviarCorreoAfiliado(Request $request){
      $this->validate($request,[
         'mensaje'   => 'required| min:5',
         'email'     => 'required| email',
         'nombre'    => 'required| min:5'
      ]);
      Mail::to($request->emailemp)->send(new CorreoContactoAfiliado());
      return redirect('afiliados/detalle_afiliado');

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
