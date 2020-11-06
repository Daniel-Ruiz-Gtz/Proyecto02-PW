<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bienvenida', function($nombre, $apellido = null){
    return view('bienvenidaq');
});


//Route::get('/cita', [CitaController::class, 'index']);
//Route::get('/cita/create', [CitaController::class, 'create']);
//Route::get('/cita/{cita}', [CitaController::class, 'show']);
Route::resource('cita', CitaController::class);


/*
/*
 Route::get('/citas', function(){
     
 });
//CRUD CITAS MEDICAS
Route::get('/citas/create', function(){
    
});

Route::post('/citas', function (Request $request){
    
});
*/