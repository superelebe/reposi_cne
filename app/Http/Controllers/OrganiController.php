<?php

namespace App\Http\Controllers;

use App\Organigrama;
use Illuminate\Http\Request;
use Image;
use App\Puesto;

class OrganiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - event';
        $organigramas = Organigrama::paginate(10);
        return view('organigrama.index',compact('organigramas','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crear Organigrama';
        $puestos = Puesto::all();
        return view('organigrama.create', compact('title', 'puestos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $organigrama = new Organigrama();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $organigrama->imagen = 'img/'.$filename;
            }

                $organigrama->nombre = $request->nombre;

                $organigrama->puesto_id = $request->puesto_id;

                $organigrama->save();

                return redirect('organigrama');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organigrama  $organigrama
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $title = 'Mostrar Organigrama';

        if($request->ajax())
        {
            return URL::to('organigrama/'.$id);
        }

        $organigrama = Organigrama::findOrfail($id);
        return view('organigrama.show',compact('title','organigrama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organigrama  $organigrama
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $title = 'Editar - Organigrama';
        if($request->ajax())
        {
            return URL::to('organigrama/'. $id . '/edit');
        }
        $puestos = Puesto::all();
        $organigrama = Organigrama::findOrfail($id);
        return view('organigrama.edit',compact('title','organigrama', 'puestos'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organigrama  $organigrama
     * @return \Illuminate\Http\Response
     */


   public function cnec(){
    $puestos = Organigrama::orderBy('id', 'asc')->limit(4)->get();
    $elpresi = $puestos->shift();
    $puestos->all();

    return view('estatico.cnec', compact('puestos', 'elpresi'));
   }

   public function organi(){
    $puestos = Organigrama::orderBy('id', 'asc')->limit(4)->get();
    $elpresi = $puestos->shift();
    $puestos->all();
    $representantes = Puesto::join('organigrama','puesto.id','=','organigrama.puesto_id')->where('titulo', 'LIKE', '%Representante%')->get();
    $vices = Puesto::join('organigrama','puesto.id','=','organigrama.puesto_id')->where('titulo', 'LIKE', '%Vice%')->get();

    $vices->shift();

    $vices->all();
    $losdemas = Puesto::join('organigrama','puesto.id','=','organigrama.puesto_id')->where('titulo', 'NOT LIKE', '%Representante%')->where('titulo', 'NOT LIKE', '%Vice%')->where('titulo', 'NOT LIKE', '%Secretario%')->where('titulo', 'NOT LIKE', '%Tesorero%')->where('titulo', 'NOT LIKE', '%Presidente%')->get();
    return view('organigrama.organigrama', compact('puestos', 'elpresi', 'representantes', 'vices','losdemas'));
   }

    public function update($id, Request $request)
    {
        $organigrama = Organigrama::findOrfail($id);
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time().'.'.$imagen->getClientOriginalExtension();
            $path = 'img/'.$filename;
            Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);
        
            $organigrama->imagen = 'img/'.$filename;
        }
        
        $organigrama->nombre = $request->nombre;

        $organigrama->puesto_id = $request->puesto_id;
        
        $organigrama->save();

        return redirect('organigrama');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organigrama  $organigrama
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
