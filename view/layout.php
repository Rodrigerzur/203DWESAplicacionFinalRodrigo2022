<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Rodrigo Geras Zurron">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <meta name="application-name" content="Log In Log Out">
        <meta name="description" content="Control de acceso e identificación de un usuario">
        <link href="../203DWESLogInLogOutMulticapa/webroot/css/style.css" rel="stylesheet" type="text/css">
        <title>Index Login y Logout Tema 5</title>
    </head>
    
    <body>
        <header class="tituloaplicacion">
            <h1>203DWESLogInLogOutMulticapa</h1>
        </header>
        
        <?php require_once $vistas[$_SESSION['paginaEnCurso']];?>
        
        <footer class="footer">
            <p><a>&copy;</a><a href="http://daw203.ieslossauces.es/index.php">Rodrigo Geras</a> Todos los derechos reservados.</p>
            <p>Ultima actualización: </p>
        </footer>
    </body>
</html>