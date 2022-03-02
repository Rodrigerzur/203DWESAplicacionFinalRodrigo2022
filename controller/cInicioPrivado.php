<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_REQUEST['cerrarsesion'])){ //Si el usuario pulsa el boton de cerrar sesion, cierro la sesion y mando al usuario al login de nuevo
    session_unset(); //Elimino la sesion
    header('Location: index.php'); //Redireciono de nuevo al login
    exit;
}

if(isset($_REQUEST['editarperfil'])){ //Si el usuario pulsa el boton de editarperfil, mando al usuario a la pagina de MiCuenta
    $_SESSION['paginaAnterior'] = 'inicioprivado'; //Guardo la pagina actual en paginaAnterior para recordarla
    $_SESSION['paginaEnCurso'] = 'micuenta'; //Asigno a la pagina en curso la pagina de MiCuenta
    header('Location: index.php'); //Redireciono de nuevo a MiCuenta
    exit;
}

if(isset($_REQUEST['mtodepartamentos'])){ //Si el usuario pulsa el boton de mtodepartamentos, mando al usuario a la pagina de mtodepartamentos
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; //Guardo la pagina actual en paginaAnterior para recordarla
    $_SESSION['paginaEnCurso'] = 'mtodepartamentos'; //Asigno a la pagina en curso la pagina de working progress
    $_SESSION['numPaginacionDepartamentos'] = 1; //Asigno la pagina de departamentos a 1 para que sea la primera
    header('Location: index.php'); //Redireciono de nuevo al working progress
    exit;
}

if(isset($_REQUEST['detalle'])){ //Si el usuario logeado pulsa el boton de detalle
    $_SESSION['paginaEnCurso'] = 'detalle'; //Asigno a la pagina en curso la pagina de detalle
    header('Location: index.php'); //Redirecciono a detalle
    exit;
}

if(isset($_REQUEST['rest'])){ //Si el usuario pulsa el boton de rest, mando al usuario a la pagina de rest
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; //Guardo la pagina actual en paginaAnterior para recordarla
    $_SESSION['paginaEnCurso'] = 'rest'; //Asigno a la pagina en curso la pagina de rest
    header('Location: index.php'); //Redireciono de nuevo a rest
    exit;
}

$sDescUsuario = $_SESSION['usuario203DWESAplicacionFinalRodrigo2022']->getDescUsuario(); //Variable que contiene la descripcion del usuario loggeado
$iNumConexiones = $_SESSION['usuario203DWESAplicacionFinalRodrigo2022']->getNumConexiones(); //Variable que contiene el numero total de conexiones del usuario loggeado
$sFechaHoraUltimaConexionAnterior = $_SESSION['usuario203DWESAplicacionFinalRodrigo2022']->getFechaHoraUltimaConexionAnterior(); //Variable que contiene la fecha de la ultima conexion del usuario loggeado

require_once $vistas['layout']; //Cargo la pagina de inicio privado
?>