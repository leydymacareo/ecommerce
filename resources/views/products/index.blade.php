<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos - PastelShop</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f9f6fb] min-h-screen">

    <!-- Header -->
    <header class="bg-[#a084ca] shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <h1 class="text-2xl font-bold text-white">Tecnología</h1>
            <div class="flex-1 px-6">
                <input type="text" placeholder="Buscar productos..." 
                       class="w-full p-2 rounded-lg border border-[#ddd] focus:outline-none focus:ring-2 focus:ring-[#6b5b95]">
            </div>
            <button class="bg-[#6b5b95] text-white px-4 py-2 rounded-lg hover:bg-[#4b3c72]">🛒 Carrito</button>
        </div>
    </header>

    <!-- Contenido -->
    <main class="container mx-auto py-10 px-6">
        <h2 class="text-3xl font-bold text-center text-[#6b5b95] mb-10">Lista de Productos</h2>

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

    <!-- Footer -->
    <footer class="bg-[#a084ca] text-center py-6 mt-10">
        <p class="text-white">&copy; 2025 PastelShop - Todos los derechos reservados</p>
    </footer>
</body>
</html>
