<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaControlador;
Route::get('/', function () {
    return view('welcome');
});
Route::get("/prueba/{prueba2}",function($prueba2){
       return "se mostrara el post {$prueba2}";
});
Route::get("/home/{prueba2}",function($prueba2){
       return "se mostrara el post {$prueba2}";
});

Route::get("/prueba",[PruebaControlador::class,"index"]);

Route::post("/crear",[PruebaControlador::class,"store"]);
Route::get('/ver-pruebas', [PruebaControlador::class, 'mostrardatos']);
