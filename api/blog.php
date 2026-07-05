<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Poesía - Richard Llamacponcca</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; color: #333; margin: 0; padding: 40px 20px; }
        .container { max-width: 800px; margin: 0 auto; }
        h1 { color: #004b87; border-bottom: 2px solid #ccc; padding-bottom: 10px; }
        .btn-volver { display: inline-block; background: #333; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-bottom: 20px; }
        .btn-volver:hover { background: #555; }
        .btn-leer { display: inline-block; background: #004b87; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px; font-weight: bold;}
        .btn-leer:hover { background: #00335e; }
        article { background: white; padding: 20px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); display: flex; justify-content: space-between; align-items: center; border-left: 5px solid #004b87; }
        article h3 { margin: 0; text-transform: capitalize; font-size: 1.2rem;}
    </style>
</head>
<body>
    <div class="container">
        <a href="/" class="btn-volver">← Volver al Perfil Principal</a>
        <h1>Mis Poemas y Reflexiones</h1>
        
        <?php
        $directorio = __DIR__ . '/../poemas/';
        if (is_dir($directorio)) {
            $archivos = glob($directorio . '*.txt');
            if (count($archivos) > 0) {
                foreach ($archivos as $archivo) {
                    $nombre_archivo = basename($archivo, '.txt');
                    $titulo = str_replace('-', ' ', $nombre_archivo); 
                    
                    echo "<article>";
                    echo "<h3>" . htmlspecialchars($titulo) . "</h3>";
                    echo "<a href='/api/poema.php?file=" . urlencode($nombre_archivo) . "' class='btn-leer'>Leer poema</a>"; 
                    echo "</article>";
                }
            } else {
                echo "<p>Aún no hay poemas publicados.</p>";
            }
        } else {
            echo "<p>Aún no hay poemas publicados.</p>";
        }
        ?>
    </div>
</body>
</html>