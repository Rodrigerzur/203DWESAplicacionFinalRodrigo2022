<?php


if(isset($_REQUEST['iniciarsesion'])){ //Si el usuario pulsa el boton de iniciar sesion, mando al usuario a la pagina de login
    $_SESSION['paginaEnCurso'] = 'login'; //Asigno a la pagina en curso la pagina de login
    header('Location: index.php'); //Redireciono de nuevo al login
    exit;
}

if(isset($_REQUEST['Registrarse'])){ //Si el usuario pulsa el boton de Registrarse, mando al usuario a la pagina de WorkingProgress
    $_SESSION['paginaAnterior'] = 'iniciopublico'; //Guardo la pagina actual en paginaAnterior para recordarla
    $_SESSION['paginaEnCurso'] = 'registro'; //Asigno a la pagina en curso la pagina de working progress
    header('Location: index.php'); //Redireciono de nuevo al working progress
    exit;
}

if(isset($_REQUEST['salir'])){ //Si el usuario pulsa el boton de salir, sale de la aplicacion
    header('Location: ../../../../proyectoDWES/indexProyectoDWES.php'); //Redireciono a el index de la asignatura
    exit;
}

require_once $vistas['layout']; //Cargo la pagina de inicio publico
?>
