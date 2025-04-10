<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas saladas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1 {
            text-align: center;
            padding: 20px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        article {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        a {
            display: block;
            text-align: center;
            margin: 20px 0;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Recetas saladas</h1>
    <div class="grid-container">
        <article>
            <h2>Lasaña</h2>
            <p><strong>Ingredientes:</strong> Placas de lasaña, carne picada, salsa de tomate, cebolla, ajo, queso rallado, bechamel.</p>
            <p><strong>Pasos:</strong> Cocinar la carne con la cebolla y el ajo, agregar la salsa de tomate, montar la lasaña alternando capas de carne y bechamel, terminar con queso rallado y hornear.</p>
        </article>
        
        <article>
            <h2>Paella</h2>
            <p><strong>Ingredientes:</strong> Arroz, azafrán, pollo, mariscos, pimientos, guisantes, caldo de pollo.</p>
            <p><strong>Pasos:</strong> Sofreír el pollo, agregar los mariscos, añadir el arroz y el azafrán, verter el caldo y cocinar hasta que el arroz esté listo.</p>
        </article>
        
        <article>
            <h2>Ensalada César</h2>
            <p><strong>Ingredientes:</strong> Lechuga romana, pollo a la parrilla, crutones, queso parmesano, aderezo César.</p>
            <p><strong>Pasos:</strong> Mezclar la lechuga con el pollo, agregar los crutones y el queso, y aderezar con la salsa César.</p>
        </article>
        
        <article>
            <h2>Tacos de Carnitas</h2>
            <p><strong>Ingredientes:</strong> Tortillas de maíz, carne de cerdo, cebolla, cilantro, limón, salsa.</p>
            <p><strong>Pasos:</strong> Cocinar la carne de cerdo hasta que esté tierna, desmenuzarla y servir en tortillas con cebolla, cilantro, limón y salsa.</p>
        </article>
        
        <article>
            <h2>Risotto de Champiñones</h2>
            <p><strong>Ingredientes:</strong> Arroz arborio, champiñones, cebolla, ajo, caldo de pollo, parmesano.</p>
            <p><strong>Pasos:</strong> Sofreír la cebolla y el ajo, añadir los champiñones, incorporar el arroz y añadir el caldo poco a poco, cocinar hasta que el arroz esté cremoso, añadir parmesano al final.</p>
        </article>
    </div>
    
    <a href="/index.html">
        <button>Inicio</button>
    </a>
</body>
</html>