<?php

require_once 'config/configAPP.php'; //Incluyo la configuracion de la app
require_once 'config/configDBPDO.php'; //Incluyo la configuracion de la base de datos

session_start(); //Creo o recupero la sesion

if(!isset($_SESSION['paginaEnCursoAplicacionFinal']) && !isset($_SESSION['usuario203DWESAplicacionFinal'])){ //Si no hay una pagina en curso y el usuario no ha hecho login
    $_SESSION['paginaEnCursoAplicacionFinal'] = 'iniciopublico'; //Asigno a la pagina en curso la pagina de inicio publico
}

require_once $controladores[$_SESSION['paginaEnCursoAplicacionFinal']]; //Cargo la pagina en curso
?>