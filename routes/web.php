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


Route::get('usuarios/home', 'HomeController@index')->name('home');

Route::get('contacto' , function(){
  return view('estatico.contacto');
});

Route::post('enviar_correo_contacto', 'WelcomeController@enviarcontacto')->name('enviar_correo_contacto');

Route::get('editarusuario', 'HomeController@editar')->name('editar-afiliado');
Route::post('usuarios/{id}/update', 'HomeController@update');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('ver_usuario/{id}', 'AdminController@estatusUsuario');
Route::post('ver_usuario/{id}/update', 'AdminController@updateEstatusUsuario');

Route::get('afiliados', 'WelcomeController@afiliados');
Route::get('detalle_afiliado/{id}', 'WelcomeController@detalleAfiliado');

Route::get('cnec' , 'OrganiController@cnec');

Route::get('servicios' , function(){
  return view('estatico.servicios');
});
Route::get('licitaciones' , function(){
  return view('estatico.licitaciones');
});
Route::get('monitoreo' , function(){
  return view('estatico.monitoreo');
});
Route::get('calculo' , function(){
  return view('estatico.calculo');
});
Route::get('consultores' , function(){
  return view('estatico.consultores');
});
Route::get('adiestramiento' , function(){
  return view('estatico.adiestramiento');
});
Route::get('afiliadas' , function(){
  return view('estatico.afiliadas');
});
Route::get('capacitacion' , function(){
  return view('estatico.capacitaciones');
});
Route::get('publicaciones' , function(){
  return view('estatico.publicaciones');
});
Route::get('comisiones' , function(){
  return view('estatico.comisiones');
});
Route::get('conocimiento' , function(){
  return view('estatico.conocimiento');
});
Route::get('siem' , function(){
  return view('estatico.siem');
});
// Route::get('capacitacion' , function(){
//   return view('estatico.capacitacion');
// });


Route::get('/admincnec/login', 'Auth\AdminLoginController@showLoginForm')->name('admincnec.login');

Route::post('/admincnec/login', 'Auth\AdminLoginController@login')->name('admincnec.login.submit');

Route::get('/admincnec', 'AdminController@index');

Route::get('/admincnec/dashboard', 'AdminController@index')->name('admincnec.dashboard');

Route::post('/admincnec/dashboard', 'AdminController@index')->name('admincnec.dashboard');

//article Routes
Route::group(['middleware'=> 'auth:admin'],function(){
  Route::resource('article','ArticleController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('article/{id}/update','\App\Http\Controllers\ArticleController@update');
  Route::get('article/{id}/delete','\App\Http\Controllers\ArticleController@destroy');
  Route::get('article/{id}/deleteMsg','\App\Http\Controllers\ArticleController@DeleteMsg');
});

Route::group(['middleware'=> 'auth:admin'],function(){
  Route::resource('organigrama','OrganiController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('organigrama/{id}/update','\App\Http\Controllers\OrganiController@update');
  Route::get('organigrama/{id}/delete','\App\Http\Controllers\OrganiController@destroy');
  Route::get('organigrama/{id}/deleteMsg','\App\Http\Controllers\OrganiController@DeleteMsg');
});

Route::group(['middleware'=> 'auth:admin'],function(){
  Route::resource('subarea','SubareaController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('subarea/{id}/update','\App\Http\Controllers\SubareaController@update');
  Route::get('subarea/{id}/delete','\App\Http\Controllers\SubareaController@destroy');
  Route::get('subarea/{id}/deleteMsg','\App\Http\Controllers\SubareaController@DeleteMsg');
});

//banner Routes
Route::group(['middleware'=> 'auth:admin'],function(){
  Route::resource('banner','\App\Http\Controllers\BannerController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('banner/{id}/update','\App\Http\Controllers\BannerController@update');
  Route::get('banner/{id}/delete','\App\Http\Controllers\BannerController@destroy');
  Route::get('banner/{id}/deleteMsg','\App\Http\Controllers\BannerController@DeleteMsg');
});

Route::group(['middleware'=> 'auth:admin'],function(){
  Route::resource('puesto','\App\Http\Controllers\PuestoController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('puesto/{id}/update','\App\Http\Controllers\PuestoController@update');
  Route::get('puesto/{id}/delete','\App\Http\Controllers\PuestoController@destroy');
  Route::get('puesto/{id}/deleteMsg','\App\Http\Controllers\PuestoController@DeleteMsg');
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

Route::group(['middleware'=> 'auth:admin'],function(){
  Route::resource('calendario','CalendarController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('calendario/{id}/update','CalendarController@update');
  Route::get('calendario/{id}/delete','CalendarController@destroy');
  Route::get('calendario/{id}/deleteMsg','CalendarController@DeleteMsg');
});


Route::group(['middleware'=> 'auth:admin'],function(){
  Route::resource('curso','CapacitacionController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('curso/{id}/update','CapacitacionController@update');
  Route::get('curso/{id}/delete','CapacitacionController@destroy');
  Route::get('curso/{id}/deleteMsg','CapacitacionController@DeleteMsg');
});

Route::get('event/{id}', 'EventController@show');

Route::get('calendario/{id}','CalendarController@show');

Route::get('cargadorFecha', 'CalendarController@cargadoFechas');

Route::get('capacitacion','CapacitacionController@cursos');
Route::get('cursos/{id}','CapacitacionController@show');

Route::get('eventos','CalendarController@calendario');

Route::get('ajaxSubarea/{id}', 'SubareaController@obtenerSuabreas');

Route::get('noticias', 'ArticleController@noticias')->name('noticias');
Route::get('noticia/{id}', 'ArticleController@noticia');
Route::get('bolsa_trabajo_cnec/{id}','BolsaTrabajoController@show')->name('bolsa_trabajo_cnec');
Route::get('todas_las_vacantes','BolsaTrabajoController@todasVacantes')->name('todas_las_vacantes');
Route::post('enviar_correo_vacante','BolsaTrabajoController@enviarCorreo')->name('enviar_correo_vacante');
Route::post('
  ','WelcomeController@enviarCorreoAfiliado')->name('enviarCorreoAfiliado');
Route::get('verificacion/{token}', 'Auth\RegisterController@verificado')->name('verificacion');
