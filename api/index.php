<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richard Llamacponcca Huamán - Perfil Profesional</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; margin: 0; padding: 0; background-color: #f4f7f6; color: #333; }
        header { background: linear-gradient(135deg, #004b87, #002b5e); color: white; padding: 3rem 0; text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        header h1 { margin: 0; font-size: 2.8rem; letter-spacing: 1px; }
        header p { font-size: 1.2rem; opacity: 0.9; margin-top: 10px; }
        main { max-width: 1100px; margin: -40px auto 40px auto; padding: 0 20px; }
        section { background: white; padding: 35px; margin-bottom: 30px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        #perfil { text-align: center; }
        #perfil img { border-radius: 50%; display: block; margin: 0 auto 20px; border: 5px solid white; box-shadow: 0 4px 15px rgba(0,0,0,0.15); width: 200px; height: 200px; object-fit: cover; }
        h2 { color: #004b87; border-bottom: 2px solid #eee; padding-bottom: 15px; margin-top: 0; }
        #servicios { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; background: transparent; box-shadow: none; padding: 0; }
        #servicios article { background: white; padding: 25px; border-radius: 12px; text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.08); border-top: 6px solid #ccc; transition: transform 0.3s ease; }
        #servicios article:hover { transform: translateY(-5px); }
        #servicios article:nth-child(1) { border-top-color: #007bff; }
        #servicios article:nth-child(2) { border-top-color: #28a745; }
        #servicios article:nth-child(3) { border-top-color: #fd7e14; }
        #servicios article:nth-child(4) { border-top-color: #6f42c1; }
        .btn { display: inline-block; background: #25d366; color: white; padding: 10px 20px; text-decoration: none; border-radius: 8px; margin-top: 15px; font-weight: bold; font-size: 0.9rem; transition: background 0.3s; }
        .btn-software { background: #004b87; }
        .btn:hover { background: #128c7e; }
        .btn-software:hover { background: #00335e; }
        footer { text-align: center; padding: 25px; background: #1a1a1a; color: #ccc; }
    </style>
</head>
<body>
    <header>
        <h1>Richard Llamacponcca Huamán</h1>
        <p>Ingeniero, Abogado y Contador | Desarrollador de Software</p>
    </header>

    <main>
        <section id="perfil">
            <img src="/img/foto.jpeg" alt="Richard Llamacponcca" onerror="this.src='https://ui-avatars.com/api/?name=Richard+Llamacponcca&size=200&background=004b87&color=fff'">
            <p>Profesional multidisciplinario basado en Cusco, Perú. Ofrezco soluciones integrales e innovadoras que unen la ingeniería, la tecnología y el derecho.</p>
        </section>

        <section id="servicios">
            <article>
                <h3>Asesoría Legal</h3>
                <p>Derecho Civil, Comercial y Corporativo.</p>
                <a href="https://wa.me/51999999999" class="btn">Contactar por WhatsApp</a>
            </article>
            <article>
                <h3>Gestión Contable</h3>
                <p>Servicios Contables y Tributarios.</p>
                <a href="/software" class="btn btn-software">Ver Software de Prueba</a>
            </article>
            <article>
                <h3>Ingeniería Civil</h3>
                <p>Proyectos Estructurales y Supervisión.</p>
            </article>
            <article>
                <h3>Desarrollo de Software</h3>
                <p>Sistemas a medida y Automatización.</p>
                <a href="https://wa.me/51999999999" class="btn">Consultar por WhatsApp</a>
            </article>
        </section>

        <section id="domotica-electronica">
            <h2>Domótica y Electrónica</h2>
            <p>Soluciones de automatización del hogar y control inteligente de dispositivos electrónicos orientados a la eficiencia.</p>
        </section>

        <section id="blog-poemas">
            <h2>Blog y Poesía</h2>
            <p>Un espacio donde comparto mis reflexiones y sensibilidad artística diariamente.</p>
            <a href="/api/blog.php" class="btn btn-software">Entrar al Blog de Poemas</a>
        </section>
    </main>

    <footer>
        <p>© 2026 Corporación Llamacponcca - Todos los derechos reservados.</p>
    </footer>
</body>
</html>