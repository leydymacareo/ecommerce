@extends('admin.layouts.app')

@section('content')
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <h3 class="text-center text-uppercase text-secondary mb-4">Lista de Productos</h3>


            <a type="button" class="btn btn-success" href="{{ route('admin.products.create') }}">Add new product</a>


            {{-- Contenedor con scroll horizontal --}}
            <div class="table-responsive">
                <table class="table table-striped table-hover align-items-center mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">Nombre</th>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">Precio</th>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">Brand</th>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">Category</th>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">Descripción</th>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">Fecha de creación
                            </th>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="align-middle text-center">{{ $product->id }}</td>
                                <td class="align-middle text-center">{{ $product->name }}</td>
                                <td class="align-middle text-center">${{ number_format($product->price, 2) }}</td>
                                <td class="align-middle text-center">{{ $product->brand_id }}</td>
                                <td class="align-middle text-center">{{ $product->category_id }}</td>
                                <td class="align-middle text-center text-truncate" style="max-width: 250px;"
                                    title="{{ $product->description }}">
                                    {{ Str::limit($product->description, 50) }}
                                </td>
                                <td class="align-middle text-center">{{ $product->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <a style="color: red" href="#">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}

            </div>
        </div>
    </div>
@endsection
