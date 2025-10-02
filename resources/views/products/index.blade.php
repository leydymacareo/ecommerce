@extends('layouts.app')

@section('title', 'Lista de productos')

@section('css')
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f9f6fb;
        margin: 0;
        padding: 0;
    }

    header {
        background: #a084ca;
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
    }

    header h1 { font-size: 24px; font-weight: bold; }
    header input { flex: 1; margin: 0 20px; padding: 8px 12px; border-radius: 8px; border: 1px solid #ddd; }
    header button { background: #6b5b95; color: white; padding: 8px 16px; border: none; border-radius: 8px; cursor: pointer; }
    header button:hover { background: #4b3c72; }

    /* Cambié el nombre para no chocar con la clase container de Tailwind */
    .custom-container { 
        display: flex; 
        justify-content: center; 
        padding: 40px; 
    }

    .form-container { 
        background: #fff; 
        padding: 30px; 
        border-radius: 15px; 
        box-shadow: 0px 4px 15px rgba(0,0,0,0.1); 
        width: 450px; 
    }

    h1 { text-align: center; color: #6b5b95; margin-bottom: 25px; }

    label { display: block; margin-bottom: 6px; font-weight: bold; color: #444; }
    input, textarea, button { width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ddd; margin-bottom: 20px; font-size: 15px; transition: all 0.3s ease; }
    input:focus, textarea:focus { border-color: #a084ca; outline: none; box-shadow: 0px 0px 5px #a084ca; }

    button { background-color: #a084ca; color: white; font-weight: bold; border: none; cursor: pointer; }
    button:hover { background-color: #6b5b95; }

    footer { background: #a084ca; text-align: center; padding: 20px; margin-top: 30px; color: white; }
</style>
@endsection


@section('content')
<!-- Contenido -->
    <main class="container mx-auto py-10 px-6">
        <h2 class="text-3xl font-bold text-center text-[#6b5b95] mb-10">
             Lista de Productos
        </h2>

        <!-- Grid de productos -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            
            <!-- Producto 1 -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition-transform">
                <img src="https://picsum.photos/400/300?random=1" alt="Audífonos Bluetooth" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Audífonos Bluetooth</h3>
                    <p class="text-[#a084ca] font-bold text-xl mt-2">$120.000</p>
                    <p class="text-sm text-gray-500 mt-1">Categoría: Electrónica</p>
                </div>
                <div class="p-4 border-t">
                    <a href="#" class="w-full block text-center bg-[#6b5b95] text-white py-2 rounded-xl hover:bg-[#4b3c72] transition">Ver detalle</a>
                </div>
            </article>

            <!-- Producto 2 -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition-transform">
                <img src="https://picsum.photos/400/300?random=2" alt="Cámara Digital" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Cámara Digital</h3>
                    <p class="text-[#a084ca] font-bold text-xl mt-2">$450.000</p>
                    <p class="text-sm text-gray-500 mt-1">Categoría: Fotografía</p>
                </div>
                <div class="p-4 border-t">
                    <a href="#" class="w-full block text-center bg-[#6b5b95] text-white py-2 rounded-xl hover:bg-[#4b3c72] transition">Ver detalle</a>
                </div>
            </article>

            <!-- Producto 3 -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition-transform">
                <img src="https://picsum.photos/400/300?random=3" alt="Reloj Smartwatch" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Reloj Smartwatch</h3>
                    <p class="text-[#a084ca] font-bold text-xl mt-2">$300.000</p>
                    <p class="text-sm text-gray-500 mt-1">Categoría: Accesorios</p>
                </div>
                <div class="p-4 border-t">
                    <a href="#" class="w-full block text-center bg-[#6b5b95] text-white py-2 rounded-xl hover:bg-[#4b3c72] transition">Ver detalle</a>
                </div>
            </article>

            <!-- Producto 4 -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition-transform">
                <img src="https://picsum.photos/400/300?random=4" alt="Mochila Casual" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Mochila Casual</h3>
                    <p class="text-[#a084ca] font-bold text-xl mt-2">$90.000</p>
                    <p class="text-sm text-gray-500 mt-1">Categoría: Moda</p>
                </div>
                <div class="p-4 border-t">
                    <a href="#" class="w-full block text-center bg-[#6b5b95] text-white py-2 rounded-xl hover:bg-[#4b3c72] transition">Ver detalle</a>
                </div>
            </article>

        </div>
    </main>
@endsection
