<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KNQ TRANSPORTES DE PERSONAL</title>
    <link rel="stylesheet" href="css/contacto.css">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="asset/knqlogo.jpg" alt="Imagen de la Empresa KNQ" class="empresa-logo">
            <h1>Contacta con nosotros</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="informacion.php">Información</a></li>
                    <li><a href="contacto.php">Contáctanos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="contact-info">
            <h2>Estamos aquí para ayudarte</h2>
            <p>Si tienes alguna pregunta, necesitas más información o deseas contratar nuestros servicios, por favor completa el siguiente formulario para ponerte en contacto con nosotros.</p>
            <!-- Formulario de contacto -->
            <div class="form-container">
                <h2>Formulario de contacto</h2>
                <form action="procesar_contacto.php" method="POST">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>

                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="asunto">Asunto:</label>
                    <input type="text" id="asunto" name="asunto" required>

                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Empresa KNQ</p>
    </footer>
</body>
</html>
