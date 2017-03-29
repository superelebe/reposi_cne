<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Image;
use Carbon\Carbon;

/**
 * Class EventController.
 *
 * @author  The scaffold-interface created at 2017-03-17 03:58:35pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - event';
        $events = Event::paginate(3);
        return view('event.index',compact('events','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - event';
        
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $event = new Event();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = public_path('uploads/evento/' . $filename);
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);
                

                $event->imagen = '/uploads/evento/'.$filename;
                
            }

                $currentId = Event::orderBy('id', 'desc')->first()->id + 1;

                $url = url('event/'.$currentId);

                $event->title = $request->title;

                $event->url = $url;
                
                $event->start = $request->start;
                
                $event->end = $request->end;
                
                $event->activo = $request->activo;
                
                $event->color = $request->color;
                
                $event->subtitulo = $request->subtitulo;
                
                $event->descripcion = $request->descripcion;

                $event->save();

                return redirect('event');

    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - event';

        if($request->ajax())
        {
            return URL::to('event/'.$id);
        }


        $event = Event::findOrfail($id);
        return view('event.show',compact('title','event'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - event';
        if($request->ajax())
        {
            return URL::to('event/'. $id . '/edit');
        }

        
        $event = Event::findOrfail($id);
        return view('event.edit',compact('title','event'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time().'.'.$imagen->getClientOriginalExtension();
            $path = public_path('uploads/evento/' . $filename);
            Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

        
            $event->imagen = '/uploads/evento/'.$filename;
        }

        $event = Event::findOrfail($id);
    	
        $event->title = $request->title;
        
        $event->start = $request->start;
        
        $event->end = $request->end;
        
        $event->activo = $request->activo;

        $event->color = $request->color;
        
        $event->subtitulo = $request->subtitulo;
        
        $event->descripcion = $request->descripcion;
        
        
        $event->save();

        return redirect('event');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/event/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$event = Event::findOrfail($id);
     	$event->delete();
        return URL::to('event');
    }

    public function eventos(){
        $eventoActivo = Event::where('activo',1)->get(['title','start','end','color','url']);
        //$event = Event::findOrfail($id);
        // $items = Event::get(['title','start','end','color','url']); 
        // $items is array now
        $items = json_encode($eventoActivo);
        return view('event.eventos',['items' => $items]);
    }
}
