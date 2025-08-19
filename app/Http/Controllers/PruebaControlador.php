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
        Prueba::create([
            "nombre"  =>$request->nombre,
            "apellido"=>$request->apellido
        ]);
            return redirect()->back();
    }
  public function edit($id){
        $prueba=Prueba::find($id);
        return view("/editar-prueba",compact("prueba"));


    }
    public function update(Request $request,$id){
         $request->validate([
           "nombre"=>"required",
           "apellido"=>"required"

         ]);
         $prueba=Prueba::find($id);
         $prueba->update([
            "nombre" => $request->nombre,
            "apellido" => $request->apellido
         ]);
         return redirect("/ver-pruebas")->with("success","registro actualizado correctamente");
    }
    public function destroy($id){
    $prueba = Prueba::find($id);
    $prueba->delete(); // Borra el registro
    return redirect('/ver-pruebas')->with('success', 'Registro eliminado correctamente');
}

    public function mostrardatos(){
        $pruebas=Prueba::all();
         $nombretabla = (new Prueba)->getTable();
        return view("prueba",compact("pruebas","nombretabla"));
    }




}
