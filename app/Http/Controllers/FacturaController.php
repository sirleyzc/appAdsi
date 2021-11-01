<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
    //
    public function store(Request $request){
        $factura = New Factura();
        $factura->fecha = $request->fecha;
        $factura->total = $request->total;
        $factura->iva = $request->iva;

        $factura->id_cliente = $request->idCli;
        $factura->id_vendedor = $request->idVen;

        $factura->save();
    }
}
