@extends('layouts.app')

@section('titulo', 'Trabajos Especiales')

@section('contenido')

    <div class="d-flex justify-content-between mb-3">
        <h1>Trabajos Especiales</h1>
        <a href="{{ route('trabajos.create') }}" class="btn btn-primary">
            Nuevo Trabajo
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Descripción</th>
                <th>Cliente</th>
                <th>Teléfono</th>
                <th>Fecha Entrega</th>
                <th>Estado</th>
                <th>Recepción</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @forelse($trabajos as $trabajo)
                <tr>
                    <td>{{ $trabajo->descripcion }}</td>
                    <td>{{ $trabajo->nombre_cliente }}</td>
                    <td>{{ $trabajo->telefono }}</td>
                    <td>{{ \Carbon\Carbon::parse($trabajo->fecha_entrega)->format('d/m/Y') }}</td>
                    <td>
                    <span class="badge bg-secondary">
                        {{ ucfirst(str_replace('_',' ', $trabajo->estado)) }}
                    </span>
                    </td>
                    <td>
                        {{ $trabajo->created_at->format('d/m/Y H:i') }}
                    </td>
                    <td>
                        {{-- Acciones SOLO para estados activos --}}
                        @if(in_array($trabajo->estado, ['pendiente', 'en_proceso', 'listo']))

                            <a href="{{ route('trabajos.edit', $trabajo) }}"
                               class="btn btn-sm btn-warning">
                                Editar
                            </a>

                            <form action="{{ route('trabajos.destroy', $trabajo) }}"
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('¿Cancelar este trabajo?')">
                                    Eliminar
                                </button>
                            </form>

                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">
                        No existen trabajos registrados
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
