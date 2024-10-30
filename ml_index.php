<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Rock - Discografía</title>
    <link rel="stylesheet" href="ml_estilo.css">
</head>
<body>
    <header>
        <h1>Blog de Rock</h1>
        <nav>
            <ul>
                <li><a href="ml_index.php">Inicio</a></li>
                <li><a href="ml_noticia.php">Noticias</a></li>
                <li><a href="ml_opinion.php">Opiniones</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="discografia">
            <h2>Discografía</h2>
            <p>Explora las discografías de tus bandas favoritas...</p>
            <div class="discos-container">
                <!-- Queen -->
                <div class="album">
                    <div class="cover" onclick="toggleInfo('infoQueen')">
                        <img src="images/ml_cover_queen.jpg" alt="Queen Album Cover">
                    </div>
                    <div class="vinyl">
                        <img src="images/ml_vinilo.png" alt="Vinilo de Queen">
                    </div>
                    <p>Queen</p>
                    <ul>
                        <li>Bohemian Rhapsody</li>
                        <li>Don't Stop Me Now</li>
                        <li>We Will Rock You</li>
                    </ul>
                    <div class="info-panel" id="infoQueen">
                        <h3>Queen</h3>
                        <p>Queen es una banda británica de rock formada en Londres en 1970, famosa por su innovador estilo y éxitos épicos como "Bohemian Rhapsody".</p>
                        <button onclick="toggleInfo('infoQueen')">Cerrar</button>
                    </div>
                </div>

                <!-- The Beatles -->
                <div class="album">
                    <div class="cover" onclick="toggleInfo('infoBeatles')">
                        <img src="images/ml_cover_beatles.jpg" alt="The Beatles Album Cover">
                    </div>
                    <div class="vinyl">
                        <img src="images/ml_vinilo.png" alt="Vinilo de The Beatles">
                    </div>
                    <p>The Beatles</p>
                    <ul>
                        <li>Hey Jude</li>
                        <li>Let It Be</li>
                        <li>Yesterday</li>
                    </ul>
                    <div class="info-panel" id="infoBeatles">
                        <h3>The Beatles</h3>
                        <p>The Beatles fueron una banda inglesa de rock formada en Liverpool en 1960. Son considerados una de las bandas más influyentes de todos los tiempos.</p>
                        <button onclick="toggleInfo('infoBeatles')">Cerrar</button>
                    </div>
                </div>

                <!-- Pink Floyd -->
                <div class="album">
                    <div class="cover" onclick="toggleInfo('infoPinkFloyd')">
                        <img src="images/ml_cover_pinkfloyd.jpg" alt="Pink Floyd Album Cover">
                    </div>
                    <div class="vinyl">
                        <img src="images/ml_vinilo.png" alt="Vinilo de Pink Floyd">
                    </div>
                    <p>Pink Floyd</p>
                    <ul>
                        <li>Comfortably Numb</li>
                        <li>Wish You Were Here</li>
                        <li>Another Brick in the Wall</li>
                    </ul>
                    <div class="info-panel" id="infoPinkFloyd">
                        <h3>Pink Floyd</h3>
                        <p>Pink Floyd es una banda británica de rock psicodélico y rock progresivo, conocida por sus álbumes conceptuales y su estilo experimental.</p>
                        <button onclick="toggleInfo('infoPinkFloyd')">Cerrar</button>
                    </div>
                </div>

                <!-- Slipknot -->
                <div class="album">
                    <div class="cover" onclick="toggleInfo('infoSlipknot')">
                        <img src="images/ml_cover_slipknot.jpg" alt="Slipknot Album Cover">
                    </div>
                    <div class="vinyl">
                        <img src="images/ml_vinilo.png" alt="Vinilo de Slipknot">
                    </div>
                    <p>Slipknot</p>
                    <ul>
                        <li>Psychosocial</li>
                        <li>Duality</li>
                        <li>Before I Forget</li>
                    </ul>
                    <div class="info-panel" id="infoSlipknot">
                        <h3>Slipknot</h3>
                        <p>Slipknot es una banda estadounidense de heavy metal, famosa por su estilo agresivo y su imagen de máscaras y trajes.</p>
                        <button onclick="toggleInfo('infoSlipknot')">Cerrar</button>
                    </div>
                </div>

                <!-- System of a Down -->
                <div class="album">
                    <div class="cover" onclick="toggleInfo('infoSOAD')">
                        <img src="images/ml_cover_systemofadown.jpg" alt="System of a Down Album Cover">
                    </div>
                    <div class="vinyl">
                        <img src="images/ml_vinilo.png" alt="Vinilo de System of a Down">
                    </div>
                    <p>System of a Down</p>
                    <ul>
                        <li>Chop Suey!</li>
                        <li>Toxicity</li>
                        <li>Aerials</li>
                    </ul>
                    <div class="info-panel" id="infoSOAD">
                        <h3>System of a Down</h3>
                        <p>System of a Down es una banda estadounidense de metal alternativo, conocida por su estilo único que mezcla metal y rock alternativo.</p>
                        <button onclick="toggleInfo('infoSOAD')">Cerrar</button>
                    </div>
                </div>

                <!-- Metallica -->
                <div class="album">
                    <div class="cover" onclick="toggleInfo('infoMetallica')">
                        <img src="images/ml_cover_metallica.jpg" alt="Metallica Album Cover">
                    </div>
                    <div class="vinyl">
                        <img src="images/ml_vinilo.png" alt="Vinilo de Metallica">
                    </div>
                    <p>Metallica</p>
                    <ul>
                        <li>Enter Sandman</li>
                        <li>Master of Puppets</li>
                        <li>One</li>
                    </ul>
                    <div class="info-panel" id="infoMetallica">
                        <h3>Metallica</h3>
                        <p>Metallica es una banda estadounidense de heavy metal formada en 1981. Es considerada una de las bandas más grandes e influyentes del género.</p>
                        <button onclick="toggleInfo('infoMetallica')">Cerrar</button>
                    </div>
                </div>
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
    <script src="js/ml_script.js"></script>
    <script>
        function toggleInfo(id) {
            const infoPanel = document.getElementById(id);
            if (infoPanel.style.display === "none" || infoPanel.style.display === "") {
                infoPanel.style.display = "block"; // Mostrar panel
            } else {
                infoPanel.style.display = "none"; // Ocultar panel
            }
        }
    </script>
</body>
</html>
