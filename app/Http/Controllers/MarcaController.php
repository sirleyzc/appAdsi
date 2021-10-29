<?php

namespace App\Http\Controllers;

use App\Models\Marca;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    //
    public function index(){
        $marca = Marca::select('id','nombre','edo')
        ->orderBy('id')
        ->get();
        return [
            'mar'=>$marca
        ];
    }

    public function store(Request $request){
        $marca = new Marca();
        $marca->nombre = $request->marca;
        $marca->edo = $request->estado;

        $marca->save();
    }
}
