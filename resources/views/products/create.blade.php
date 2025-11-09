@extends('admin.layouts.app')

@section('title', 'Crear producto')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-lg">
                <div class="card-header pb-0 d-flex justify-content-between align-items-start flex-wrap gap-3">
                    <div>
                        <h5 class="mb-0">Crear un nuevo producto</h5>
                        <p class="text-sm text-muted mb-0">Completa los campos para registrar un producto en el catálogo.</p>
                    </div>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-dark btn-sm">
                        <i class="material-symbols-rounded me-1">arrow_back</i>
                        Volver al listado
                    </a>
                </div>

                <div class="card-body px-4">
                    <form action="{{ route('admin.products.store') }}" method="POST" class="row g-4">
                        @csrf
                        <div class="col-md-6">
                            <label for="name" class="form-label text-sm text-uppercase text-secondary">Nombre</label>
                            <input type="text" id="productName"
                                class="form-control border border-1 border-secondary px-3 py-2" name="name">
                        </div>

                        <div class="col-md-6">
                            <label for="category" class="form-label text-sm text-uppercase text-secondary">Categoría</label>
                            <select id="category" name="category"
                                class="form-select border border-1 border-secondary px-3 py-2">
                                <option selected disabled>Selecciona una categoría</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="brand" class="form-label text-sm text-uppercase text-secondary">Marca</label>
                            <select id="brand" name="brand"
                                class="form-select border border-1 border-secondary px-3 py-2">
                                <option selected disabled>Selecciona una marca</option>
                                @foreach ($brands as $item)
                                    <option value={{ $item->id }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="price" class="form-label text-sm text-uppercase text-secondary">Precio</label>
                            <div class="input-group">
                                <input type="number" id="price"
                                    class="form-control border border-1 border-secondary px-3 py-2" step="0.01"
                                    name="price">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="image" class="form-label text-sm text-uppercase text-secondary">Imagen
                                (URL)</label>
                            <input type="url" id="image"
                                class="form-control border border-1 border-secondary px-3 py-2"
                                placeholder="https://ejemplo.com/imagen.jpg" inputmode="url" name="image">
                        </div>

                        <div class="col-12">
                            <label for="description"
                                class="form-label text-sm text-uppercase text-secondary">Descripción</label>
                            <textarea id="productDescription" class="form-control border border-1 border-secondary p-3" rows="4"
                                name="description"></textarea>
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
