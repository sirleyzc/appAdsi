<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //
    public function index()
    {
        $prod = Producto::join('categorias','productos.id_categ','categorias.id')
        ->select('productos.nombre','productos.precio','productos.cant','categorias.nombre as Categoria')
        ->get();
        return [
            'prod'=>$prod
        ];
    }

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
