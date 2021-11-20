<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\DetFactura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class FacturaController extends Controller
{
    //
    public function store(Request $request){
        try {
            //Iniciamos la transacción en la base de datos
            DB::beginTransaction();

            $fecha=Carbon::now('America/Bogota');

            //Guardar el maestro
            $fact= New Factura();
            $fact->id_cliente = $request->idCliente;
            $fact->fecha = $fecha;
            //$id_vend->\Auth::user()->id;
            $fact->id_vendedor=$request->idVend;
            $fact->total = $request->total;
            $fact->iva = $request->iva;

            $fact->save();

            $detalles=$request->data;

            foreach($detalles as $ep=>$det){
                $detalle = new DetFactura();
                $detalle->id_fact = $fact->id;
                $detalle->id_prod = $det['idProd'];
                $detalle->precio = $det['precio'];
                $detalle->cant = $det['cant'];
                $detalle->total = $det['precio']*$det['cant'];

                $detalle->save();
            }

            DB::commit();
        } catch (Exception $e) {
            DB:rollback();
            console.log($e);
        }

    }
}
