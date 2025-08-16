<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/prueba/{prueba2}",function($prueba2){
       return "se mostrara el post {$prueba2}";
});


Route::get('/hospitales', [HospitalController::class, 'example']);

/**Route::get("crear-hospital",function(){
    $hospital = new hospital();
    $hospital->sede="norte";
    $hospital->ciudad="cali";
    $hospital->save();
    return "datos registrados correctamente";
});
 */

