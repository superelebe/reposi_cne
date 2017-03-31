<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\BolsaTrabajo;
use App\Article;
use App\Event;
use App\Capacitacion;
use App\User;

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
        $noAfiliados = User::NoAfiliados()->take(3)->get();
        return view('admincnec.dashboard', compact('noAfiliados'));
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