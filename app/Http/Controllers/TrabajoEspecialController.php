<?php

namespace App\Http\Controllers;

use App\Models\TrabajoEspecial;
use Illuminate\Http\Request;

class TrabajoEspecialController extends Controller
{
    public function index()
    {
        $trabajos = TrabajoEspecial::all();
        return view('trabajos.index', compact('trabajos'));
    }

    public function create()
    {
        return view('trabajos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion'      => 'required|max:200',
            'nombre_cliente'   => 'required|max:100',
            'telefono'         => 'required|digits:10',
            'fecha_entrega'    => 'required|date|after_or_equal:today',
            'estado' => 'required|in:pendiente,en_proceso,listo,entregado,cancelado',

        ]);

        TrabajoEspecial::create($request->all());

        return redirect()->route('trabajos.index')
            ->with('success', 'Trabajo Especial creado satisfactoriamente');
    }

    public function edit(TrabajoEspecial $trabajo)
    {
        return view('trabajos.edit', compact('trabajo'));
    }

    public function update(Request $request, TrabajoEspecial $trabajo)
    {
        $request->validate([
            'descripcion'      => 'required|max:200',
            'nombre_cliente'   => 'required|max:100',
            'telefono'         => 'required|digits:10',
            'fecha_entrega'    => 'required|date|after_or_equal:today',
            'estado' => 'required|in:pendiente,en_proceso,listo,entregado,cancelado',

        ]);

        $trabajo->update($request->all());

        return redirect()->route('trabajos.index')
            ->with('success', 'Trabajo Especial actualizado satisfactoriamente');
    }
    public function destroy(TrabajoEspecial $trabajo)
    {
        $trabajo->update([
            'estado' => 'cancelado'
        ]);

        return redirect()->route('trabajos.index')
            ->with('success', 'Trabajo cancelado correctamente.');
    }
}
