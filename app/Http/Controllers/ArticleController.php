<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Image;
use Carbon\Carbon;

/**
 * Class ArticleController.
 *
 * @author  The scaffold-interface created at 2017-03-17 03:30:32pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - article';
        $articles = Article::paginate(6);
        return view('article.index',compact('articles','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crear - Noticia';
        
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request){
            $article = new Article();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = public_path('uploads/noticias/' . $filename);
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);
                

                $article->imagen = '/uploads/noticias/'.$filename;
                
            }
                
        $article->titulo = $request->titulo;
                
        $article->subtitulo = $request->subtitulo;
                
        $article->cuerpo = $request->cuerpo;

        $article->save();

        return redirect('article');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function noticia($id,Request $request)
    {
        $title = 'Show - article';

        if($request->ajax())
        {
            return URL::to('article/'.$id);
        }

        $article = Article::findOrfail($id);
        return view('article.noticia',compact('title','article'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - article';
        if($request->ajax())
        {
            return URL::to('article/'. $id . '/edit');
        }
        
        $article = Article::findOrfail($id);
        return view('article.edit',compact('title','article'));
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
        $article = Article::findOrfail($id);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time().'.'.$imagen->getClientOriginalExtension();
            $path = public_path('uploads/noticias/' . $filename);
            Image::make($imagen)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($path);


            $article->imagen = '/uploads/noticias/'.$filename;

        }
                
        $article->titulo = $request->titulo;
                
        $article->subtitulo = $request->subtitulo;
                
        $article->cuerpo = $request->cuerpo;

        $article->save();

        return redirect('article');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/article/'. $id . '/delete');

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
     	$article = Article::findOrfail($id);
     	$article->delete();
        return URL::to('article');
    }
    public function noticias(){
        $potato = Article::orderBy('created_at', 'ASC')->paginate(5);
        return view('article.noticias')->with('noticia',$potato);
        // $articulos = Article::orderBy('created_at', 'ASC')->paginate(6);
        // return view('article.edit',compact('title','article'  ));
    }
}
