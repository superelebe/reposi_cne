<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/admincnec/login', 'Auth\AdminLoginController@showLoginForm')->name('admincnec.login');

Route::post('/admincnec/login', 'Auth\AdminLoginController@login')->name('admincnec.login.submit');

Route::get('/admincnec', 'AdminController@index');

Route::get('/admincnec/dashboard', 'AdminController@index')->name('admincnec.dashboard');
;

Route::post('/admincnec/dashboard', 'AdminController@index')->name('admincnec.dashboard');

//article Routes
Route::group(['middleware'=> 'auth:admin'],function(){
  Route::resource('article','ArticleController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('article/{id}/update','\App\Http\Controllers\ArticleController@update');
  Route::get('article/{id}/delete','\App\Http\Controllers\ArticleController@destroy');
  Route::get('article/{id}/deleteMsg','\App\Http\Controllers\ArticleController@DeleteMsg');
});

//banner Routes
Route::group(['middleware'=> 'auth:admin'],function(){
  Route::resource('banner','\App\Http\Controllers\BannerController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('banner/{id}/update','\App\Http\Controllers\BannerController@update');
  Route::get('banner/{id}/delete','\App\Http\Controllers\BannerController@destroy');
  Route::get('banner/{id}/deleteMsg','\App\Http\Controllers\BannerController@DeleteMsg');
});

//event Routes
Route::group(['middleware'=> 'auth:admin'],function(){
  Route::resource('event','\App\Http\Controllers\EventController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('event/{id}/update','\App\Http\Controllers\EventController@update');
  Route::get('event/{id}/delete','\App\Http\Controllers\EventController@destroy');
  Route::get('event/{id}/deleteMsg','\App\Http\Controllers\EventController@DeleteMsg');
});

Route::group(['middleware'=> 'auth:admin'],function(){
  Route::resource('bolsa_trabajo','\App\Http\Controllers\BolsaTrabajoController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('bolsa_trabajo/{id}/update','\App\Http\Controllers\BolsaTrabajoController@update');
  Route::get('bolsa_trabajo/{id}/delete','\App\Http\Controllers\BolsaTrabajoController@destroy');
  Route::get('bolsa_trabajo/{id}/deleteMsg','\App\Http\Controllers\BolsaTrabajoController@DeleteMsg');
});

Route::get('event/{id}', 'EventController@show');

Route::get('mostrar', 'ArticleController@mostrar')->name('article.noticias');
Route::get('noticia/{id}', 'ArticleController@noticia');
Route::get('eventos', 'EventController@eventos');
Route::get('bolsa_trabajo_cnec/{id}','BolsaTrabajoController@show')->name('bolsa_trabajo_cnec');
Route::get('todas_las_vacantes','BolsaTrabajoController@todasVacantes')->name('todas_las_vacantes');
Route::post('enviar_correo_vacante','BolsaTrabajoController@enviarCorreo')->name('enviar_correo_vacante');
