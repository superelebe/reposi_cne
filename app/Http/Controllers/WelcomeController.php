<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Article;
use App\User;
use App\Calendar;
use App\Organigrama;
use App\Capacitacion;
use Carbon\Carbon;
use Mail;
use App\Mail\CorreoContactoAfiliado;
use App\Mail\NuevoCorreoContacto;


class WelcomeController extends Controller{
   public function index(){
   	$otro_banner      = Banner::Activo();
   	$noticias         = Article::orderBy('id','asc')->take(2)->get();
    $calendarios      = Calendar::CalendarActivo()->get(['title','start', 'imagen', 'descripcion','url','id'])->toArray();
    $capacitaciones   = Capacitacion::FechaActivo()->get(['title','start','imagen', 'descripcion', 'url','id'])->toArray();
    $fechas           = array_merge($calendarios, $capacitaciones);

   	return view('welcome',compact('otro_banner','noticias', 'fechas'));
   	
   }

    public function edit($id,Request $request){
        $users = User::findOrfail($id);
        
        return view('capacitacion.edit',compact('users'));
    }



    public function enviarcontacto(Request $request){
        $this->validate($request,[
            'correo'        =>  'required|email|min:5',
            'nombre'        =>  'required|min:3',
            'mensaje'   =>  'required|min:3',
            'telefono'      =>  'required',
            'asunto'        =>  'required',
        ]);
        $data = [
              'nombre' => $request->nombre,
              'correo' => $request->correo,
              'mensaje' => $request->mensaje,
              'telefono' => $request->telefono,
              'asunto' => $request->asunto
        ];
        Mail::to('webmaster@elebegraph.com')->send(new NuevoCorreoContacto($data));
        return redirect('/');
    }
   public function update(){

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
