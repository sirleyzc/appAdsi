<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //
    public function store(Request $request){
        $categoria= new Categoria();
        $categoria->nombre=$request->nombre;
        $categoria->edo=$request->edo;

        $categoria->save();
    }
}
