<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opiniones - Blog de Rock</title>
    <link rel="stylesheet" href="ml_estilo.css">
</head>
<body>
    <header>
        <h1>Opiniones de Rock</h1>
        <nav>
            <ul>
                <li><a href="ml_index.php">Inicio</a></li>
                <li><a href="ml_noticia.php">Noticias</a></li>
                <li><a href="ml_opinion.php">Opiniones</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="opiniones">
            <h2>Comparte tus Opiniones</h2>
            <p>Cuéntanos lo que piensas sobre tus bandas favoritas, conciertos o álbumes de rock...</p>

            <!-- Formulario para Enviar Opiniones -->
            <form id="opiniones-form" action="ml_guardar_opinion.php" method="POST">
                <input type="text" name="usuario" placeholder="Tu nombre (opcional)" maxlength="50">
                <textarea id="opinion" name="opinion" placeholder="Escribe tu opinión aquí..." required></textarea>
                <button type="submit" id="submit-button">Enviar Opinión</button>
                <div id="loading-spinner" class="spinner" style="display: none;"></div>
            </form>

            <!-- Contenedor de Opiniones -->
            <div class="opiniones-container">
                <?php
                // Configuración de conexión a la base de datos
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "blogrock";

                // Crear la conexión
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Verificar la conexión
                if ($conn->connect_error) {
                    die("Error de conexión: " . $conn->connect_error);
                }

                // Consulta para obtener las opiniones de la base de datos
                $sql = "SELECT usuario, contenido, fecha FROM opiniones ORDER BY fecha DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Mostrar cada opinión
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="opinion fade-in">';
                        echo '<h3>' . htmlspecialchars($row["usuario"] ?: "Anónimo") . '</h3>';
                        echo '<p>' . htmlspecialchars($row["contenido"]) . '</p>';
                        echo '<span class="fecha">Publicado el ' . date("d/m/Y", strtotime($row["fecha"])) . '</span>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>No hay opiniones aún. ¡Sé el primero en dejar tu comentario!</p>";
                }

                // Cerrar la conexión
                $conn->close();
                ?>
            </div>
        </section>
    </main>


    <div class="relampago relampago1"></div>
    <div class="relampago relampago2"></div>
    <div class="relampago relampago3"></div>

    <!-- Gotas de lluvia -->
    <div class="gota gota1"></div>
    <div class="gota gota2"></div>
    <div class="gota gota3"></div>
    <div class="gota gota4"></div>
    <div class="gota gota5"></div>
    <div class="gota gota6"></div>
    <div class="gota gota7"></div>
    <div class="gota gota8"></div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Mostrar el spinner de carga al enviar el formulario
        document.getElementById('opiniones-form').onsubmit = function() {
            document.getElementById('submit-button').style.display = 'none';
            document.getElementById('loading-spinner').style.display = 'inline-block';
        };
    </script>
</body>
</html>
