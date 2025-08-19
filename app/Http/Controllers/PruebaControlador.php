<?php
namespace App\Http\Controllers;
use App\Models\Prueba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PruebaControlador extends Controller
{
    //
    public function index (){
        return response()->json(Prueba::all());
    }

    public function store(Request $request){
        $nuevo=Prueba::create([
            "nombre"  =>$request->nombre,
            "apellido"=>$request->apellido
        ]);
            return redirect()->back();
    }

    public function mostrardatos(){
        $pruebas=Prueba::all();
         $nombretabla = (new Prueba)->getTable();
        return view("prueba",compact("pruebas","nombretabla"));
    }

}
