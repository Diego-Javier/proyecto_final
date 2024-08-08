<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;




Route::get('/', function () {
    return view('index');
    })->name('index');

Route::get('/nosotros', function () {
    return view('Nosotros');
    })->name('nosotros');

Route::get('/servicios', function () {
    return view('Servicios');
    })->name('servicios');

Route::get('/recetas', function () {
    return view('Recetas');
    })->name('recetas');

Route::get('/maps', function () {
    return view('Maps');
    })->name('maps');



Route::get('/login', 'App\Http\Controllers\LoginController')->name('login');
Route::post('login', 'App\Http\Controllers\ValidacionLoginController@store');


Route::get('/usuarios', 'App\Http\Controllers\AltaController@index')->name('usuarios.index');
Route::get('/usuarios/registro', 'App\Http\Controllers\AltaController@create')->name('usuarios.alta');

Route::get('/usuarios{id}/editar', 'App\Http\Controllers\AltaController@edit')->name('usuarios.edit');
Route::patch('/usuarios/{id}', 'App\Http\Controllers\AltaController@update')->name('usuarios.update');

Route::post('usuarios', 'App\Http\Controllers\AltaController@store')->name('usuarios.store');

Route::get('/usuarios/{id}', 'App\Http\Controllers\AltaController@show')->name('usuarios.show');
Route::delete('/usuarios/{id}', 'App\Http\Controllers\AltaController@destroy')->name('usuarios.destroy');



Route::get('/enchiladas', function () {
    return view('Recetas.Enchiladasverdes');
    })->name('enchiladas');

Route::get('/tacos', function () {
    return view('Recetas.Tacosmexicanos');
    })->name('tacos');

Route::get('/espagueti', function () {
    return view('Recetas.Espagueti');
    })->name('espagueti');

Route::get('/lentejas', function () {
    return view('Recetas.Lentejas');
    })->name('lentejas');

Route::get('/hamburguesas', function () {
    return view('Recetas.Hamburguesa');
    })->name('hamburguesa');

Route::get('/pollo', function () {
    return view('Recetas.Pollonaranja');
    })->name('pollo');





