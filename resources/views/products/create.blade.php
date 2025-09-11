<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
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

        /* Contenedor del formulario */
        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px;
        }

        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
            width: 450px;
        }

        h1 {
            text-align: center;
            color: #6b5b95;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #444;
        }

        input, textarea, button {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus {
            border-color: #a084ca;
            outline: none;
            box-shadow: 0px 0px 5px #a084ca;
        }

        button {
            background-color: #a084ca;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }

        button:hover {
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

    <!-- Formulario -->
    <div class="container">
        <div class="form-container">
            <h1>Crear un nuevo producto</h1>
            <form action="{{ route('products.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" required>

                <label for="description">Descripción</label>
                <textarea name="description" id="description" cols="30" rows="5" required></textarea>

                <label for="price">Precio</label>
                <input type="number" name="price" id="price" step="0.01" required>

                <label for="image">Imagen</label>
                <input type="file" name="image" id="image" accept="image/*" required>

                <label for="brand">Marca</label>
                <input type="text" name="brand" id="brand" required>

                <button type="submit">Guardar Producto</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 PastelShop - Todos los derechos reservados</p>
    </footer>
</body>
</html>
