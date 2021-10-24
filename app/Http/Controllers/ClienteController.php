<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function store(Request $request){
        $cliente = new Cliente();
        $cliente->tp_doc = $request->tp_doc;
        $cliente->num_doc = $request->num;
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->tel = $request->tel;
        $cliente->dir = $request->dir;
        $cliente->email = $request->email;
        $cliente->edo = $request->edo;

        $cliente->save();
    }
}
