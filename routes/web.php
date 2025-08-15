<?php

use Illuminate\Support\Facades\Route;
use App\Models\hospital;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/mision",function(){
    return view("mision");
});
Route::get("crear-hospital",function(){
    $hospital = new hospital();
    $hospital->sede="norte";
    $hospital->ciudad="cali";
    $hospital->save();
    return "datos registrados correctamente";
});
