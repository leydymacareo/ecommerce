<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f9f6fb;
            margin: 0;
            padding: 0;
        }

        /* Cabecera */
        header {
            background: #a084ca;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        header h1 {
            font-size: 24px;
            font-weight: bold;
        }

        header input {
            flex: 1;
            margin: 0 20px;
            padding: 8px 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            outline: none;
        }

        header button {
            background: #6b5b95;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        header button:hover {
            background: #4b3c72;
        }

        /* Contenido */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .product-detail {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
            max-width: 800px;
            width: 100%;
            display: flex;
            gap: 30px;
        }

        .product-detail img {
            max-width: 300px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.08);
        }

        .info {
            flex: 1;
        }

        h1 {
            margin-bottom: 15px;
            color: #6b5b95;
        }

        p {
            margin-bottom: 12px;
            color: #444;
            line-height: 1.5;
        }

        .price {
            font-size: 22px;
            font-weight: bold;
            color: #a084ca;
            margin-bottom: 20px;
        }

        .btn-back {
            display: inline-block;
            padding: 12px 20px;
            background-color: #a084ca;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-back:hover {
            background-color: #6b5b95;
        }

        /* Footer */
        footer {
            background: #a084ca;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            color: white;
        }
    </style>
</head>
<body>
    
    <!-- Header -->
    <header>
        <h1>Tecnología</h1>
        <input type="text" placeholder="Buscar productos...">
        <button>🛒 Carrito</button>
    </header>

    <!-- Contenido principal -->
    <div class="container">
        <div class="product-detail">
            <img src="https://picsum.photos/400/300?random=1" alt="Producto">
            <div class="info">
                <h1>Audífonos</h1>
                <p><strong>Marca:</strong> Marca X</p>
                <p class="price">Precio: $120.00</p>
                <p><strong>Descripción:</strong> Este es un producto de ejemplo con detalles ficticios para mostrar el diseño de la vista de detalle.</p>
                
                <a href="index.html" class="btn-back">← Volver al listado</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 PastelShop - Todos los derechos reservados</p>
    </footer>
</body>
</html>
