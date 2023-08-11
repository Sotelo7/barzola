<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Zonas;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedidos::all();
        return view('pedidos.index', ['pedidos'=> $pedidos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zonas = Zonas::all();
        return view('pedidos.create', ['zonas' => Zonas::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pedidos' => 'nullable|unique:pedidos|max:20',
            'nombre' => 'required|max:255',
            'fecha' => 'required|date',
            'telefono' => 'required|',
            'email' => 'required|email',
            'zona' => 'required',
        ]);

        $pedidos = new Pedidos();
        $pedidos->pedido = $request->input('pedido');
        $pedidos->nombre = $request->input('nombre');
        $pedidos->fecha_pedido = $request->input('fecha');
        $pedidos->telefono = $request->input('telefono');
        $pedidos->email = $request->input('email');
        $pedidos->zona_id = $request->input('zona');
        $pedidos->save();

        return view("pedidos.mesagge", ['msg' => "Registro Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedidos $pedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedidos $pedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedidos $pedidos)
    {
        //
    }
}
