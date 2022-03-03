<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_REQUEST['cancelar'])){ //Si el usuario pulsa el boton de cancelar, mando al usuario a la pagina de mto departamentos
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior']; //Asigno a la pagina en curso la pagina anterior
    header('Location: index.php'); //Redireciono de nuevo a mto departamentos
    exit;
}

$oDepartamento = DepartamentoPDO::buscarDepartamentosPorCod($_SESSION['codDepartamentoEnCurso']); //Ejecuto la consulta que busca un departamento por el codigo que tiene la sesion

$aDepartamento = [ //Guardo los datos del departamento en un array para mostrarlos
    'codDepartamento' => $oDepartamento->getCodDepartamento(),
    'descDepartamento' => $oDepartamento->getDescDepartamento(),
    'fechaCreacionDepartamento' => $oDepartamento->getFechaCreacionDepartamento(),
    'volumenNegocioDepartamento' => $oDepartamento->getVolumenDeNegocio()
];

if(isset($_REQUEST['eliminar'])){ //Si el usuario le da a eliminar
    $oDepartamentoNuevo = DepartamentoPDO::bajaFisicaDepartamento($_SESSION['codDepartamentoEnCurso']); //Elimino el departamento pasado en la sesion
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior']; //Asigno a la pagina en curso la pagina anterior
    header('Location: index.php'); //Redirecciono a mto departamentos
    exit;
}

require_once $vistas['layout']; //Cargo la pagina de EliminarDepartamento
?>