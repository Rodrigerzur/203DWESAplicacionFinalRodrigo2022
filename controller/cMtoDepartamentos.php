<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if(isset($_REQUEST['volverdepartamentos'])){ //Si el usuario pulsa el boton de volver, mando al usuario a la pagina de inicio privado
    $_SESSION['criterioBusquedaDepartamentos']['descripcionBuscada'] = ""; //Si el usuario sale de MtoDepartamentos, elimino el valor que hay guardado del campo de busqueda por descripcion
    $_SESSION['numPaginacionDepartamentos'] = 1; //Asigno la pagina de departamentos a 1
    $_SESSION['criterioBusquedaDepartamentos']['estado'] = ESTADO_TODOS;
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; //Asigno a la pagina en curso la pagina de inicio privado
    $_SESSION['paginaEnCurso'] = 'inicioprivado';
    header('Location: index.php'); //Redireciono de nuevo al inicio privado
    exit;
}

if(isset($_REQUEST['add'])){ //Si el usuario pulsa el boton de anyadir, mando al usuario a la pagina de alta de departamento
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; //Asigno a la pagina en curso la pagina anterior
    $_SESSION['paginaEnCurso'] = 'altadepartamento';
    header('Location: index.php'); //Redireciono de nuevo a alta de departamento
    exit;
}

if(isset($_REQUEST['dardebaja'])){ //Si el usuario pulsa el boton de dardebaja, mando al usuario a la pagina de baja logica departamento
    $_SESSION['codDepartamentoEnCurso'] = $_REQUEST['dardebaja']; //Guardo en la variable de sesion el codigo de departamento en curso para usar dicho departamento en baja logica departamento
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; //Asigno a la pagina en curso la pagina anterior
    $_SESSION['paginaEnCurso'] = 'bajalogicadepartamento'; 
    header('Location: index.php'); //Redireciono de nuevo a baja logica departamento
    exit;
}

if(isset($_REQUEST['eliminar'])){ //Si el usuario pulsa el boton de eliminar, mando al usuario a la pagina de baja fisica departamento
    $_SESSION['codDepartamentoEnCurso'] = $_REQUEST['eliminar']; //Guardo en la variable de sesion el codigo de departamento en curso para usar dicho departamento en baja fisica departamento
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; //Asigno a la pagina en curso la pagina anterior
    $_SESSION['paginaEnCurso'] = 'eliminardepartamento'; 
    header('Location: index.php'); //Redireciono de nuevo a baja fisica departamento
    exit;
}

if(isset($_REQUEST['modificar'])){ //Si el usuario pulsa el boton de modificar, mando al usuario a la pagina de consultar modificar departamento
    $_SESSION['codDepartamentoEnCurso'] = $_REQUEST['modificar']; //Guardo en la variable de sesion el codigo de departamento en curso para usar dicho departamento en consultar modificar departamento
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; //Asigno a la pagina en curso la pagina anterior
    $_SESSION['paginaEnCurso'] = 'consultarmodificardepartamento';
    header('Location: index.php'); //Redireciono de nuevo a consultar modificar departamento
    exit;
}

$iDepartamentosTotales = DepartamentoPDO::buscaDepartamentosTotales() / 3;

if(isset($_REQUEST['paginaPrimera'])){ //Si el usuario pulsa el boton de paginaPrimera
    $_SESSION['numPaginacionDepartamentos'] = 1; //Le situo en la primera pagina
    header('Location: index.php');
    exit;
}
if(isset($_REQUEST['paginaAnterior']) && $_SESSION['numPaginacionDepartamentos'] >= 2){ //Si el usuario pulsa el boton de paginaAnterior
    $_SESSION['numPaginacionDepartamentos']--; //Le situo una pagina mas atras
    header('Location: index.php');
    exit;
}
if(isset($_REQUEST['paginaSiguiente']) && $_SESSION['numPaginacionDepartamentos'] < $iDepartamentosTotales){ //Si el usuario pulsa el boton de paginaSiguiente
    $_SESSION['numPaginacionDepartamentos']++; //Le situo una pagina mas adelante
    header('Location: index.php');
    exit;
}
if(isset($_REQUEST['paginaUltima'])){ //Si el usuario pulsa el boton de paginaUltima
    $_SESSION['numPaginacionDepartamentos'] = ceil($iDepartamentosTotales);
    header('Location: index.php');
    exit;
}

$aErrores = [ //Array de errores
    'descBuscarDepartamento' => null,
    'filtroDepartamentos' => null
];
$aLista = [ //Array de lista de opciones de filtrado
    'todos',
    'altas',
    'bajas'
];

if (isset($_REQUEST['buscar'])) { //Si el usuario pulsa el boton de buscar
    $entradaOK = true; //Variable de entrada correcta inicializada a true
    $aErrores['descBuscarDepartamento'] = validacionFormularios::comprobarAlfabetico($_REQUEST['descDepartamento'], 255, 1, OPCIONAL); //Valido los datos pasados por teclado de la descripcion del departamento
    $aErrores['filtroDepartamentos'] = validacionFormularios::validarElementoEnLista($_REQUEST['estado'], $aLista);
    
    //Comprobar si algun campo del array de errores ha sido rellenado
    foreach ($aErrores as $sCampo => $sError) {//recorro el array errores
        if ($sError != null) { //Si ha habido fallos en el array
            $_REQUEST[$sCampo] = ''; //Limpio el campo del formulario
            $entradaOK = false; //Le doy el valor false a bEntradaOK
        }
    }
}else { //Si el usuario no le ha dado al boton de buscar
    $entradaOK = false;
}

if ($entradaOK) {//Si la entrada ha sido correcta
    $_SESSION['criterioBusquedaDepartamentos']['descripcionBuscada'] = $_REQUEST['descDepartamento']; //Guardo en la session el contenido del campo de buscar departamento por descripcion
    switch ($_REQUEST['estado']){ //Guardo el estado que ha seleccionado el usuario en el filtrado de la busqueda
        case 'todos':
            $sEstado = ESTADO_TODOS;
            break;
        case 'altas':
            $sEstado = ESTADO_ALTAS;
            break;
        case 'bajas':
            $sEstado = ESTADO_BAJAS;
            break;
    }
    $_SESSION['criterioBusquedaDepartamentos']['estado'] = $sEstado; //Guardo el valor del estado en la session
}

$aDepartamentosVista = []; //Array para guardar el contenido de un departamento
$oResultadoBuscar = DepartamentoPDO::buscaDepartamentosPorEstado($_SESSION['criterioBusquedaDepartamentos']['descripcionBuscada'] ?? '', $_SESSION['criterioBusquedaDepartamentos']['estado'] ?? ESTADO_TODOS, $_SESSION['numPaginacionDepartamentos']-1); //Obtengo los datos del departamento con el metodo buscaDepartamentosPorDesc
if ($oResultadoBuscar){ //Si el resultado es correcto
    foreach($oResultadoBuscar as $aDepartamento){//Recorro el objeto del resultado que contiene un array
        array_push($aDepartamentosVista, [//Hago uso del metodo array push para meter los valores en el array $aDepartamentosVista
            'codDepartamento' => $aDepartamento->getCodDepartamento(), //Guardo en el valor codDepartamento el codigo del departamento
            'descDepartamento' => $aDepartamento->getDescDepartamento(), //Guardo en el valor descDepartamento la descripcion del departamento
            'fechaAlta' => date('d/m/Y H:i:s' , $aDepartamento->getFechaCreacionDepartamento()), //Guardo en el valor fechaAlta la fecha de alta del departamento
            'volumenNegocio' => $aDepartamento->getVolumenDeNegocio(), //Guardo en el valor volumenNegocio el volumen de negocio del departamento
            'fechaBaja' => !empty($aDepartamento->getFechaBajaDepartamento()) ? date('d/m/Y H:i:s', $aDepartamento->getFechaBajaDepartamento()) : '' //Guardo en el valor fechaBaja la fecha de baja del departamento
        ]); 
    }
}else{
    $aErrores['descBuscarDepartamento'] = "No se encuentra el departamento";
}

require_once $vistas['layout']; //Cargo la pagina de MtoDepartamentos
?>