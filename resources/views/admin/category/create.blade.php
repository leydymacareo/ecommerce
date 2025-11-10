@extends('admin.layouts.app')

@section('content')

    <h1>Add new Category</h1>
        <div class="card">
            <form action="{{ route('admin.category.store') }}" method="POST" class="form-card">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Escribe el nombre..." required>
                </div>

                <button type="submit" class="btn-save">Guardar</button>
            </form>
        </div>


@endsection
