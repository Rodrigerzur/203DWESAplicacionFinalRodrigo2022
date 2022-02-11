<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Rodrigo Geras Zurron">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <meta name="application-name" content="Aplicacion Final">
        <meta name="description" content="Control de acceso e identificación de un usuario">
        <link href="webroot/css/style.css" rel="stylesheet" type="text/css">
        <title>Index Aplicacion Final</title>
    </head>

    <body>
        <header class="tituloaplicacion">
            <h1>203DWESAplicacionFinalRodrigo2022</h1>
        </header>

        <?php require_once $vistas[$_SESSION['paginaEnCurso']]; ?>

        <footer class="footer">
            <p><a>&copy;</a><a href="http://daw203.ieslossauces.es/index.php">Rodrigo Geras</a> Todos los derechos reservados.</p>
            <p><a href="doc/html/index.html">Documentación</a></p>
             <p><a href="doc/TECNOLOGIAS USADAS.pdf">Tecnologias usadas</a></p>
            <p><a href="https://github.com/Rodrigerzur/203DWESAplicacionFinalRodrigo2022">Github</a> Ultima actualización: 04/02/2022</p>
        </footer>
    </body>
</html>