<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalControlador;

Route::get('/', function () {
    return view('welcome');
});


/**Route::get("crear-hospital",function(){
    $hospital = new hospital();
    $hospital->sede="norte";
    $hospital->ciudad="cali";
    $hospital->save();
    return "datos registrados correctamente";
});
 */
Route::get('/hospitales', [HospitalControlador::class, 'example']);
