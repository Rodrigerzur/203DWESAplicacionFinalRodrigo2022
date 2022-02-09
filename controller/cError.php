<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if (isset($_REQUEST['volvererror'])) { //Si el usuario pulsa el boton de volver, mando al usuario a la pagina de inicio publico
    $_SESSION['paginaEnCurso'] = 'iniciopublico'; //Asigno a la pagina en curso la pagina de inicio publico
    header('Location: index.php'); //Redireciono de nuevo al inicio publico
    exit;
}

$sCodError = $_SESSION['error']->getCodError();
$sDescError = $_SESSION['error']->getDescError();
$sArchivoError = $_SESSION['error']->getArchivoError();
$iLineaError = $_SESSION['error']->getLineaError();

require_once $vistas['layout']; //Cargo la pagina de error