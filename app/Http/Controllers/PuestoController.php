<?php

namespace App\Http\Controllers;

use App\Puesto;
use Illuminate\Http\Request;
use App\Organigrama;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puestos = Puesto::paginate(15);
        return view('puesto.index',compact('puestos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crear Puesto';
        
        return view('puesto.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $puesto = new Puesto();

            $puesto->titulo = $request->titulo;

            $puesto->save();

            return redirect('puesto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Mostrar Puesto';
        if($request->ajax())
        {
            return URL::to('puesto/'. $id . '/edit');
        }

        
        $puesto = Puesto::findOrfail($id);
        return view('puesto.show',compact('title','puesto' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Mostrar Puesto';
        if($request->ajax())
        {
            return URL::to('puesto/'. $id . '/edit');
        }

        $puesto = Puesto::findOrfail($id);
        return view('puesto.edit',compact('title','puesto' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $puesto = Puesto::findOrfail($id);
        
        $puesto->titulo = $request->titulo;

        $puesto->save();

        return redirect('puesto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puesto $puesto)
    {
        //
    }
}
