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
        <?php
        // Leer el archivo recetas-saladas.txt y mostrar las recetas
        $file = 'recetas-saladas.txt';
        if (file_exists($file)) {
            $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                list($title, $ingredients, $steps) = explode('|', $line);
                echo "<article>
                        <h2>$title</h2>
                        <p><strong>Ingredientes:</strong> $ingredients</p>
                        <p><strong>Pasos:</strong> $steps</p>
                    </article>";
            }
        } else {
            echo "<p>No se encontró el archivo de recetas.</p>";
        }
        ?>
    </div>
    
    <a href="/index.html">
        <button>Inicio</button>
    </a>
</body>
</html>