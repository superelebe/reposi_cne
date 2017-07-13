<?php

namespace App\Http\Controllers;

use App\Capacitacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;

class CapacitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - Capacitacion';
        $capacitaciones = Capacitacion::paginate(6);
        return view('capacitacion.index',compact('capacitaciones','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('capacitacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
            $cursos = new Capacitacion();
            if ($request->hasFile('pdf')) {
                $imagen = $request->file('pdf');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = public_path('img/' . $filename);
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $cursos->imagen = 'img/'.$filename;
            }

                $cursos->title = $request->title;
                
                $cursos->start = $request->start;
        
                $cursos->horarios = $request->horarios;

                $cursos->inversion = $request->inversion;
                
                $cursos->descripcion = $request->descripcion;

                $cursos->lugar = $request->lugar;
                
                $cursos->end = $request->end;

                $cursos->url = "cursos/10";

                $cursos->save();

                Capacitacion::where('id', $cursos->id)->update(['url' => 'cursos/'.$cursos->id]);

                return redirect('curso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Capacitacion  $capacitacion
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request){
        $cursos = Capacitacion::findOrfail($id);
        return view('capacitacion.show',compact('cursos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Capacitacion  $capacitacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request){
        $cursos = Capacitacion::findOrfail($id);
        return view('capacitacion.edit',compact('cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Capacitacion  $capacitacion
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
            if ($request->hasFile('pdf')) {
                $imagen = $request->file('pdf');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = public_path('img/' . $filename);
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $cursos->pdf = 'img/'.$filename;
            }

                $cursos = Capacitacion::findOrfail($id);

                $cursos->title = $request->title;
                
                $cursos->start = $request->start;
        
                $cursos->horarios = $request->horarios;

                $cursos->inversion = $request->inversion;
                
                $cursos->descripcion = $request->descripcion;

                $cursos->lugar = $request->lugar;
                
                $cursos->end = $request->end;

                $cursos->save();

                return redirect('curso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Capacitacion  $capacitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Capacitacion $capacitacion)
    {
        //
    }
    public function cursos(){
        $elprimero = Capacitacion::orderBy('id', 'desc')->first();
        $collection = Capacitacion::all();
        $collection->pop();
        return view('capacitacion.capacitaciones', compact('collection', 'elprimero'));
    }
}
