<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Service;
use App\Ciudad;
use Image;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Auth::user();
        return view('usuarios.home',compact('usuario'));
    }
    public function editar(Request $request){
        $title = 'Editar - Datos Afiliado';
        $servicios = Service::all();
        $ciudades = Ciudad::all();
        $usuario = Auth::user();
        return view('usuarios.editar',compact('usuario','title', 'servicios', 'ciudades' ));  
    }

    public function update($id,Request $request){
        $usuario = User::findOrfail($id);
            if ($request->hasFile('imagenes')) {
                $imagen = $request->file('imagenes');
                $md5Name = md5_file($imagen->getRealPath());
                $md5Name = $md5Name.time();
                $filename_imagen = str_slug(pathinfo($imagen->getClientOriginalName(), PATHINFO_FILENAME)).'_'.$md5Name.'.'.$imagen->getClientOriginalExtension();
                $path_imagen = base_path() .'/storage/app/afiliados/avatar/'.$filename_imagen;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path_imagen);
                

                $usuario->imagenes = $path_imagen;
                
            }
            if ($request->hasFile('cvs')) {
                $cvs = $request->file('cvs');
                $md5Name = md5_file(time().$cvs->getRealPath());
                $filename_imagen = str_slug(pathinfo($cvs->getClientOriginalName(), PATHINFO_FILENAME)).'_'.$md5Name.'.'.$cvs->getClientOriginalExtension();
                $path = base_path() .'/storage/app/afiliados/cv/';
                $cvs->move($path , $fileName);
                

                $usuario->cvs = $path.$filename;
                
            }
                
        $usuario->empresa = $request->empresa;
                
        $usuario->representante = $request->representante;
                
        $usuario->direccion = $request->direccion;
        $usuario->rfc = $request->rfc;
        $usuario->servicio_id = $request->servicio_id;
        $usuario->certificados = $request->certificados;
        $usuario->email = $request->email;
        $usuario->direccion = $request->direccion;

        dd($usuario);

        $usuario->save();

        return redirect('article');
    }
}
