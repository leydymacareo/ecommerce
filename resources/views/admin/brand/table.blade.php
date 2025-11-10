@extends('admin.layouts.app')

@section('content')
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div>
                    <h3 class="text-uppercase text-secondary mb-1">Lista de Marcas</h3>
                    <p class="text-sm text-muted mb-0">Administra las marcas asociadas a los productos.</p>
                </div>
                <a type="button" class="btn btn-success" href="{{ route('admin.brand.create') }}">
                    <i class="material-symbols-rounded me-1">add</i>
                    Añadir marca
                </a>
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">Nombre</th>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">Fecha de creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($brands as $brand)
                            <tr>
                                <td class="align-middle text-center">{{ $brand->id }}</td>
                                <td class="align-middle text-center">{{ $brand->name }}</td>
                                <td class="align-middle text-center">{{ $brand->created_at?->format('d/m/Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center text-muted py-4">
                                    No hay marcas registradas aún.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $brands->links() }}
            </div>
        </div>
    </div>
@endsection
