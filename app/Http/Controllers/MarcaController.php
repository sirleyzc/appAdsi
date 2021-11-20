<?php

namespace App\Http\Controllers;

use App\Models\Marca;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MarcaController extends Controller
{
    //
    public function index(){
        $marca = Marca::select('id','nombre','edo')
        ->orderBy('id')
        ->get();
        return Inertia::render('Marca',['mar'=>$marca]);
        //return [
        //    'mar'=>$marca
        //];
    }

    public function store(Request $request){
        $marca = new Marca();
        $marca->nombre = $request->marca;
        $marca->edo = $request->estado;

        $marca->save();
    }

    public function update(Request $request)
    {
        $marca = Marca::findOrFail($request->id);
        $marca->nombre = $request->marca;
        $marca->edo = $request->estado;

        $marca->save();
    }

    public function destroy(Request $request){
        $marca = Marca::findOrFail($request->id);
        $marca->delete();
    }
}
