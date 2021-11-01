<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //

    public function index(){
        $categoria = Categoria::select('id','nombre')
        ->orderBy('id','asc')
        ->get();
        return [
            'cat'=>$categoria
        ];
    }

    public function store(Request $request){
        $categoria= new Categoria();
        $categoria->nombre=$request->nombre;
        $categoria->edo=$request->edo;

        $categoria->save();
    }

    public function update(Request $request){
        $categoria = Categoria::findOrFail($request->id);
        $categoria->nombre=$request->nombre;
        $categoria->edo=$request->edo;

        $categoria->save();
    }

    public function destroy(Request $request){
        $categoria = Categoria::findOrFail($request->id);
        $categoria->delete();
    }

    public function getCategoria(){
        $edo = $request->edo;
        $categoria = Categoria::select('id','nombre')
        ->where('edo',$edo)
        ->get();
        return [
            'cat'=>$categoria
        ];
    }
}
