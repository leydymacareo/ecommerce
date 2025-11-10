@extends('admin.layouts.app')

@section('title', 'Crear marca')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-lg">
                <div class="card-header pb-0 d-flex justify-content-between align-items-start flex-wrap gap-3">
                    <div>
                        <h5 class="mb-0">Registrar una nueva marca</h5>
                        <p class="text-sm text-muted mb-0">Las marcas ayudan a tus clientes a identificar sus productos favoritos.</p>
                    </div>
                    <a href="{{ route('admin.brand.table') }}" class="btn btn-outline-dark btn-sm">
                        <i class="material-symbols-rounded me-1">arrow_back</i>
                        Volver al listado
                    </a>
                </div>

                <div class="card-body px-4">
                    <form action="{{ route('admin.brand.store') }}" method="POST" class="row g-4">
                        @csrf
                        <div class="col-md-6">
                            <label for="name" class="form-label text-sm text-uppercase text-secondary">Nombre</label>
                            <input type="text" id="name" name="name"
                                class="form-control border border-1 border-secondary px-3 py-2"
                                placeholder="Escribe el nombre de la marca" value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-12 d-flex justify-content-end gap-2 mt-3">
                            <button type="reset" class="btn btn-outline-secondary">
                                <i class="material-symbols-rounded me-1">restart_alt</i>
                                Limpiar
                            </button>
                            <button type="submit" class="btn bg-gradient-dark text-uppercase">
                                <i class="material-symbols-rounded me-1">save</i>
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
