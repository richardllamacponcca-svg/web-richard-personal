<?php
// Capturamos el nombre del archivo que nos envía el botón
$archivo_get = isset($_GET['file']) ? $_GET['file'] : '';
// Medida de seguridad para leer solo el nombre
$archivo_get = basename($archivo_get); 
$ruta_archivo = __DIR__ . '/../poemas/' . $archivo_get . '.txt';

// Si el archivo no existe, mostramos error
if (empty($archivo_get) || !file_exists($ruta_archivo)) {
    die("<div style='text-align: center; padding: 50px; font-family: sans-serif;'>Poema no encontrado. <br><br><a href='/' style='color: #004b87;'>Volver al inicio</a></div>");
}

$titulo = str_replace('-', ' ', $archivo_get);
$contenido = file_get_contents($ruta_archivo);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars(ucfirst($titulo)); ?> - Poesía</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .poema-container {
            background: white;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            max-width: 700px;
            width: 100%;
            text-align: center;
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
            margin: 40px 0;
            white-space: pre-wrap; /* Esto respeta los saltos de línea de tu txt */
        }
        .btn-volver {
            display: inline-block;
            background: #004b87;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn-volver:hover {
            background: #00335e;
        }
    </style>
</head>
<body>
    <div class="poema-container">
        <h1><?php echo htmlspecialchars($titulo); ?></h1>
        
        <div class="contenido"><?php echo htmlspecialchars($contenido); ?></div>
        
        <a href="/" class="btn-volver">← Regresar al Perfil</a>
    </div>
</body>
</html>