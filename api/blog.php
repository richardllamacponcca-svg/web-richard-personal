<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Poesía - Richard Llamacponcca</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center; /* Esto es lo que centra todo en la pantalla */
        }
        .btn-volver {
            background: #004b87;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 40px;
            font-weight: bold;
        }
        .btn-volver:hover {
            background: #00335e;
        }
        .poema-container {
            background: white;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            max-width: 700px;
            width: 100%;
            text-align: center; /* Centra el texto del poema */
            margin-bottom: 40px;
        }
        h1 { 
            color: #004b87; 
            margin-top: 0; 
            text-transform: capitalize; 
            font-size: 2.2rem;
            border-bottom: 2px solid #eee; 
            padding-bottom: 15px; 
        }
        .contenido { 
            font-style: italic; 
            font-size: 1.2rem; 
            line-height: 1.8; 
            color: #444; 
            margin: 30px 0; 
            white-space: pre-wrap; /* Respeta los saltos de línea de tu txt */
        }
    </style>
</head>
<body>
    
    <a href="/" class="btn-volver">← Volver al Perfil Principal</a>
    
    <?php
    // Buscamos la carpeta de poemas
    $directorio = __DIR__ . '/../poemas/';
    
    if (is_dir($directorio)) {
        $archivos = glob($directorio . '*.txt');
        
        if (count($archivos) > 0) {
            // Mostramos cada poema directamente, completo y centrado
            foreach ($archivos as $archivo) {
                $nombre_archivo = basename($archivo, '.txt');
                $titulo = str_replace('-', ' ', $nombre_archivo); 
                $contenido = file_get_contents($archivo);
                
                echo "<div class='poema-container'>";
                echo "<h1>" . htmlspecialchars($titulo) . "</h1>";
                echo "<div class='contenido'>" . htmlspecialchars($contenido) . "</div>";
                echo "</div>";
            }
        } else {
            echo "<div class='poema-container'><p>Aún no hay poemas publicados.</p></div>";
        }
    } else {
        echo "<div class='poema-container'><p>Aún no hay poemas publicados.</p></div>";
    }
    ?>

</body>
</html>