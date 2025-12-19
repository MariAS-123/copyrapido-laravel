@extends('layouts.app')

@section('titulo', 'Editar Trabajo')

@section('contenido')

    <h1>Editar Trabajo Especial</h1>

    <form action="{{ route('trabajos.update', $trabajo) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Descripción *</label>
            <input type="text" name="descripcion" class="form-control"
                   value="{{ old('descripcion', $trabajo->descripcion) }}" required>
            @error('descripcion')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre del Cliente *</label>
            <input type="text" name="nombre_cliente" class="form-control"
                   value="{{ old('nombre_cliente', $trabajo->nombre_cliente) }}" required>
            @error('nombre_cliente')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono *</label>
            <input type="text" name="telefono" class="form-control"
                   value="{{ old('telefono', $trabajo->telefono) }}" required>
            @error('telefono')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de Entrega *</label>
            <input type="date" name="fecha_entrega" class="form-control"
                   value="{{ old('fecha_entrega', $trabajo->fecha_entrega) }}" required>
            @error('fecha_entrega')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Estado *</label>
            <select name="estado" class="form-select" required>

                <option value="pendiente"
                    {{ old('estado', $trabajo->estado) == 'pendiente' ? 'selected' : '' }}>
                    Pendiente
                </option>

                <option value="en_proceso"
                    {{ old('estado', $trabajo->estado) == 'en_proceso' ? 'selected' : '' }}>
                    En proceso
                </option>

                <option value="listo"
                    {{ old('estado', $trabajo->estado) == 'listo' ? 'selected' : '' }}>
                    Listo
                </option>

                <option value="entregado"
                    {{ old('estado', $trabajo->estado) == 'entregado' ? 'selected' : '' }}>
                    Entregado
                </option>
                <option value="cancelado"
                    {{ old('estado', $trabajo->estado) == 'cancelado' ? 'selected' : '' }}>
                    Cancelado
                </option>

            </select>
            @error('estado')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <a href="{{ route('trabajos.index') }}" class="btn btn-secondary">
            Cancelar
        </a>

        <button type="submit" class="btn btn-primary">
            Actualizar
        </button>
    </form>

@endsection
