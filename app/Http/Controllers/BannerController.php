<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Image;

/**
 * Class BannerController.
 *
 * @author  The scaffold-interface created at 2017-03-17 03:52:36pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - banner';
        $banners = Banner::paginate(6);
        return view('banner.index',compact('banners','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - banner';
        
        return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Banner();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();

                $path = 'img/banner/'.$filename;
                $thumbpath = 'img/banner/thumb_'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                Image::make($imagen)->resize(null, 100, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($thumbpath);
                 
                $banner->thumb = 'img/banner/thumb_'.$filename;
                $banner->imagen = 'img/banner/'.$filename;
                
            }
        
        $banner->titulo = $request->titulo;
        
        $banner->link = $request->link;

        
        
        $banner->save();


        return redirect('banner');
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
        $title = 'Show - banner';

        if($request->ajax())
        {
            return URL::to('banner/'.$id);
        }

        $banner = Banner::findOrfail($id);
        return view('banner.show',compact('title','banner'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - banner';
        if($request->ajax())
        {
            return URL::to('banner/'. $id . '/edit');
        }

        
        $banner = Banner::findOrfail($id);
        return view('banner.edit',compact('title','banner'  ));
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
        $banner = Banner::findOrfail($id);
    	
        $banner->titulo = $request->titulo;
        
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();

                $path = 'img/banner/'.$filename;
                $thumbpath = 'img/banner/thumb_'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                Image::make($imagen)->resize(null, 100, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($thumbpath);
                 
                $banner->thumb = 'img/banner/thumb_'.$filename;
                $banner->imagen = 'img/banner/'.$filename;
                
            }
        
        $banner->thumb = $request->thumb;
        
        $banner->link = $request->link;
        
        
        $banner->save();

        return redirect('banner');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/banner/'. $id . '/delete');

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
     	$banner = Banner::findOrfail($id);
     	$banner->delete();
        return URL::to('banner');
    }
}
