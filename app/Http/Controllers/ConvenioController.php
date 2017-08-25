<?php

namespace App\Http\Controllers;

use App\Convenio;
use Illuminate\Http\Request;
use Image;

class ConvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - Convenios';
        $convenios = Convenio::paginate(3);
        return view('convenio.index',compact('convenios','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('convenio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'imagen'            =>  'required|min:5',
            'nombre'            =>  'required|min:3',
            'direccion'         =>  'required|min:3',
            'descripcion'       =>  'required|min:3',
            'vigencia'          =>  'required|min:3',
            'vigente'           =>  'required',
            'convenio'          =>  'required',
        ]);
            $convenio = new Convenio();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/convenios/'. $filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);
                $convenio->imagen = $path;
            }
            $convenio->nombre       = $request->nombre;
            $convenio->direccion    = $request->direccion;
            $convenio->vigencia     = $request->vigencia;
            $convenio->convenio     = $request->convenio;
            $convenio->vigente      = $request->vigente;
            $convenio->descripcion  = $request->descripcion;

            $convenio->save();

            return redirect('convenio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request){
        $convenio = Convenio::findOrfail($id);
        return view('convenio.show',compact('convenio'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $convenio = Convenio::findOrfail($id);
        return view('convenio.edit',compact('convenio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $convenio = Convenio::findOrfail($id);
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time().'.'.$imagen->getClientOriginalExtension();
            $path = public_path('img/convenios/' . $filename);
            Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);
            $convenio->imagen = '/uploads/evento/'.$filename;
        }
        
        $convenio->nombre       = $request->nombre;
        $convenio->direccion    = $request->direccion;
        $convenio->vigencia     = $request->vigencia;
        $convenio->convenio     = $request->convenio;
        $convenio->vigente      = $request->vigente;
        $convenio->descripcion  = $request->descripcion;
        
        $convenio->save();

        return redirect('convenio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convenio $convenio)
    {
        $convenio = Convenio::findOrfail($id);
        $convenio->delete();
        return URL::to('convenio');
    }

    public function convenios(){
        $convenios = Convenio::paginate(12);
        $tresconvenios = Convenio::orderBy('id','DESC')->limit(3)->get();
        return view('convenio.convenios',compact('convenios','tresconvenios'));
    }

}
