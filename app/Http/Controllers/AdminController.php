<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\BolsaTrabajo;
use App\Article;
use App\Event;
use App\Capacitacion;
use App\Calendar;
use App\User;
use App\Organigrama;
use App\Puesto;
use App\Convenio;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $noticias = Article::orderBy('id', 'desc')->take(3)->get();
        $vacantes = BolsaTrabajo::orderBy('id', 'desc')->take(3)->get();
        $eventos = Calendar::CalendarActivo()->orderBy('id', 'desc')->take(3)->get();
        $capacitaciones = Capacitacion::FechaActivo()->orderBy('id', 'desc')->take(3)->get();
        $banners = Banner::orderBy('id', 'desc')->take(3)->get();
        $organigramas = Organigrama::orderBy('id', 'desc')->take(3)->get();
        $puestos = Puesto::orderBy('id', 'desc')->take(3)->get();
        $convenios = Convenio::orderBy('id', 'desc')->take(3)->get();
        $noAfiliados = User::NoAfiliados()->take(3)->get();
        return view('admincnec.dashboard', compact('noAfiliados','noticias','vacantes','eventos', 'capacitaciones', 'banners', 'organigramas', 'puestos', 'convenios'));
    }
    
    public function estatusUsuario($id, Request $request){
        $usuario = User::findOrfail($id);
        return view('admincnec.editar_estatus',compact('usuario'));
    }

    public function updateEstatusUsuario($id, Request $request){
        $usuario = User::findOrfail($id);
        
        $usuario->estatus = $request->estatus;
        
        $usuario->save();

        return redirect('admincnec');

    }
}