<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //
    public function store(Request $request){
        $prod = new Producto();
        $prod->cod_prod = $request->codProd;
        $prod->nombre = $request->nombre;
        $prod->cant = $request->cant;
        if ($request->cant>12){
            $prod->precio = $request->precio*0.95;
        }else {
            $prod->precio = $request->precio;
        }
        $prod->fec_ven = $request->fecVenc;
        $prod->edo = $request->edo;

        $prod->id_marca = $request->idMarca;
        $prod->id_categ = $request->idCat;

        $prod->save();
    }
}
