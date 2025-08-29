<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - ACE MAGIC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf6e3;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        header img {
            width: 150px;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        nav {
            margin-top: 15px;
        }
        nav a {
            text-decoration: none;
            color: #000;
            margin: 0 15px;
            font-size: 18px;
            font-weight: bold;
        }
        nav a:hover {
            color: #ff6600;
        }
        h1 {
            margin: 20px 0;
            font-size: 28px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }
        input, textarea, button {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            font-size: 16px;
        }
        button {
            background-color: #000;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #444;
        }
        footer {
            margin-top: 40px;
            padding: 15px;
            background-color: #fff;
        }
        .instagram {
            margin-top: 10px;
        }
        .instagram img {
            width: 30px;
            vertical-align: middle;
        }
    </style>
</head>
<body>

<header>
    <!-- Logotipo -->
    <img src="LOGOTIPO.jpeg" alt="Logo ACE MAGIC">
    <h2>ACE MAGIC</h2>
    
    <!-- Menú de navegación -->
    <nav>
        <a href="index.html">Inicio</a>
        <a href="productos.html">Productos</a>
        <a href="contacto.html">Contacto</a>
    </nav>
</header>

<h1>Contáctanos</h1>

<!-- Formulario con Formspree -->
<form action="https://formspree.io/f/TU-ENDPOINT-AQUI" method="POST">
    <input type="text" name="nombre" placeholder="Tu nombre" required>
    <input type="email" name="email" placeholder="Tu correo electrónico" required>
    <textarea name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea>
    <button type="submit">Enviar mensaje</button>
</form>

<footer>
    <p>&copy; 2025 ACE MAGIC. Todos los derechos reservados.</p>
    <div class="instagram">
        <a href="https://www.instagram.com/ice_magic.official/" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram">
        </a>
    </div>
</footer>

</body>
</html>
