<?php

namespace App\Http\Controllers;

use App\BolsaTrabajo;
use Illuminate\Http\Request;
use URL;
use Image;
use Mail;
use App\Mail\CorreoVacante;
use Storage;

class BolsaTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Index - article';
        $trabajos = BolsaTrabajo::paginate(6);
        return view('bolsa_trabajo.index',compact('trabajos','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crear - Trabajo';
        return view('bolsa_trabajo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $vacante = new BolsaTrabajo();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = public_path('uploads/empresa/' . $filename);
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);
                

                $vacante->imagen = '/uploads/empresa/'.$filename;
                
            }

                $vacante->titulo = $request->titulo;
                
                $vacante->start = $request->start;
                
                $vacante->end = $request->end;
                
                $vacante->activo = $request->activo;
                
                $vacante->sueldo = $request->sueldo;
                
                $vacante->descripcion = $request->descripcion;
                
                $vacante->empresa = $request->empresa;

                $vacante->save();

                return redirect('bolsa_trabajo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BolsaTrabajo  $bolsaTrabajo
     * @return \Illuminate\Http\Response
     */
    public function show($id, BolsaTrabajo $bolsaTrabajo)
    {
        $title = 'Vacantes';
        $vacante = BolsaTrabajo::findOrfail($id);
        return view('bolsa_trabajo.show',compact('title','vacante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BolsaTrabajo  $bolsaTrabajo
     * @return \Illuminate\Http\Response
     */
    public function edit(BolsaTrabajo $bolsaTrabajo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BolsaTrabajo  $bolsaTrabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BolsaTrabajo $bolsaTrabajo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BolsaTrabajo  $bolsaTrabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy(BolsaTrabajo $bolsaTrabajo)
    {
        //
    }
    public function todasVacantes()
    {
        $potato = BolsaTrabajo::orderBy('created_at', 'ASC')->paginate(5);
        return view('bolsa_trabajo.vacantes')->with('vacante',$potato);
    }
    public function enviarCorreo(Request $request){
        if($request->hasFile('cv')){
            $archivo = $request->file('cv');
            $md5Name = md5_file($archivo->getRealPath());
            $eldia=date("D_M_d_G:i"); //this returns the current date time
            $fileName = str_slug(pathinfo($archivo->getClientOriginalName(), PATHINFO_FILENAME)).'_'.$md5Name.'.'.$archivo->getClientOriginalExtension();

            $path = base_path() . '/storage/app/vacantes/cv/';
            $mipath = $path.$fileName;
            $archivo->move($path , $fileName);
            // return Storage::put($fileName,file_get_contents($archivo));
        }else{
            $urlarchivo = '';
        }
        $this->validate($request,[
            'correo'        =>  'required|email|min:5',
            'nombre'        =>  'required|min:3',
            'comentarios'   =>  'required|min:3',
            'telefono'      =>  'required'
        ]);
        $data = [
              'nombre' => $request->nombre,
              'correo' => $request->correo,
              'urlcv' =>    $fileName,
              'mipath' => $mipath,
              'comentarios' => $request->comentarios,
              'telefono' => $request->telefono,
              'vacante' => $request->nombreVacante,
              'empresa' => $request->empresaVacante
        ];
        Mail::to($request->correo)->cc('hola@cnecgot.org')->send(new CorreoVacante($data));
        return redirect('todas_las_vacantes');
    }


}
