<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetFactura;

class DetFacturaController extends Controller
{
    //
    public function store(Request $request){
        $detfactura = New DetFactura();
        $detfactura->precio = $request->precio;
        $detfactura->cant = $request->cant;
        $detfactura->total = $request->total;

        $detfactura->id_fact = $request->idFact;
        $detfactura->id_prod = $request->idProd;

        $detfactura->save();
    }
}
