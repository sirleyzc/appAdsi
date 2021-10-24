<?php

namespace App\Http\Controllers;

use App\Models\Marca;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    //
    public function store(Request $request){
        $marca = new Marca();
        $marca->nombre = $request->marca;
        $marca->edo = $request->estado;

        $marca->save();
    }
}
