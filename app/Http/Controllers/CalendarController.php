<?php

namespace App\Http\Controllers;

use App\Calendar;
use Illuminate\Http\Request;
use Image;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dias = Calendar::paginate(6);
        return view('calendar.index',compact('dias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calendar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $calendario = new Calendar();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = public_path('uploads/calendario/' . $filename);
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $calendario->imagen = '/uploads/calendario/'.$filename;
                
            }

                $calendario->title = $request->titulo;
                
                $calendario->start = $request->start;
                
                $calendario->end = $request->end;
                
                $calendario->subtitulo = $request->subtitulo;
                
                $calendario->descripcion = $request->descripcion;

                $calendario->save();

                Calendar::where('id', $calendario->id)->update(['url' => 'calendario/'.$calendario->id]);

                return redirect('calendario');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {

        if($request->ajax())
        {
            return URL::to('calendario/'.$id);
        }


        $calendario = Calendar::findOrfail($id);
        return view('calendar.show',compact('calendario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $dia = Calendar::findOrfail($id);
        return view('calendar.edit',compact('dia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time().'.'.$imagen->getClientOriginalExtension();
            $path = public_path('uploads/calendario/' . $filename);
            Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

        
            $calendario->imagen = '/uploads/calendario/'.$filename;
        }

        $calendario = Calendar::findOrfail($id);
        
        $calendario->title = $request->titulo;
        
        $calendario->start = $request->start;
        
        $calendario->end = $request->end;
        
        $calendario->subtitulo = $request->subtitulo;
        
        $calendario->descripcion = $request->descripcion;
        
        
        $calendario->save();

        return redirect('calendario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $calendario = Calendar::findOrfail($id);
        $calendario->delete();
        return URL::to('calendar');
    }
    public function calendario(){
        // $data = Calendar::all();
        // return Response()->json($data);
        $dias = Calendar::CalendarActivo()->get(['title','start', 'end']);
        return view('calendar.calendario', compact('dias'));
    }
    public function cargadoFechas(){
        $fecha = Calendar::CalendarActivo()->get(['title','start', 'url']);
        return Response()->json($fecha);
    }
}
