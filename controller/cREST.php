<?php

if (isset($_REQUEST['volver'])) { //Si el usuario pulsa el boton de volver, le mando a la ventana de Inicio privado de nuevo
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; //Guardo la pagina actual en paginaAnterior para recordarla
    $_SESSION['paginaEnCurso'] = 'inicioprivado'; //Asigno a la pagina el curso la pagina de inicio privado
    header('Location: index.php'); //Redireciono de nuevo al login
    exit;
}

$aErrores = [//Array de errores
    'miDivisa' => null,
    'otraDivisa' => null,
    'errorServidor' => null
];



if(isset($_REQUEST['mostrarAPOD'])){
   $iAPOD = REST::apod();
}


//------------------------------------------------------------------------------------------------------------------------------------------


$entradaOK = true; //Variable de entrada correcta inicializada a true

$iDevolucion = 0; //Variable para almacenar el resultado de la conversion

if (isset($_REQUEST['convertir'])) { //Si el usuario pulsa el boton de convertir valido los datos pasados por teclado
    $aErrores['miDivisa'] = validacionFormularios::comprobarAlfabetico($_REQUEST['miDivisa'], 3, 3, OBLIGATORIO); //Valido los datos pasados por teclado de mi divisa
    $aErrores['otraDivisa'] = validacionFormularios::comprobarAlfabetico($_REQUEST['otraDivisa'], 3, 3, OBLIGATORIO); //Valido los datos pasados por teclado de pasar a
    //Comprobar si algun campo del array de errores ha sido rellenado
    foreach ($aErrores as $campo => $error) {//recorro el array errores
        if ($error != null) {//Compruebo si hay algun error
            $entradaOK = false; //Le doy el valor false a entradaOK
            $_REQUEST[$campo] = ''; //Limpio el campo del formulario
        }
    }
} else { //Si el usuario no le ha dado al boton de convertir
    $entradaOK = false;
}

if ($entradaOK) { //Si la entrada ha sido correcta
    $iDevolucion = REST::conversorMoneda($_REQUEST['miDivisa'], $_REQUEST['otraDivisa']); //Convierto la moneda con el metodo conversorMoneda

    if ($iDevolucion == 0) {
        $aErrores['otraDivisa'] = "Las divisas no son correctas"; //Si la devolucion es 0 es que la divisa no existe y no es correcta
    }
}


//----------------------------------------------------------------------------------------------------------------------------------------------------



//----------------------------------------------------------------------------------------------------------------------------------------------------
$dAjenoEntradaOK = true; //Variable de entrada correcta inicializada a true

$aErroresDepartamentoAjeno = [ //Array de errores
    'eBuscarDepartamento' => null,
    'eResultado' => null
];

if (isset($_REQUEST['buscarDepartamentoAjeno'])) {
    $aErroresDepartamentoAjeno['eBuscarDepartamento'] = validacionFormularios::comprobarAlfabetico($_REQUEST['codDepartamentoAjeno'], 3, 3, OBLIGATORIO); //Valido los datos pasados por teclado de codigo departamento
    
    //Comprobar si algun campo del array de errores ha sido rellenado
    foreach ($aErroresDepartamentoAjeno as $campo => $error) {//recorro el array errores
        if ($error != null) {//Compruebo si hay algun error
            $dAjenoEntradaOK = false;//Le doy el valor false a entradaOK
            $_REQUEST[$campo] = '';//Limpio el campo del formulario
        }
    }
}else{ //Si el usuario no le ha dado al boton de buscar
    $dAjenoEntradaOK = false;
}

if($dAjenoEntradaOK){
    $oResultadoDepAjeno = REST::buscarDepartamentoAjeno($_REQUEST['codDepartamentoAjeno']);
    if(is_object($oResultadoDepAjeno)){
        $aDepartamentoAjeno = [
            'codDepartamento' => $oResultadoDepAjeno->getCodDepartamento(),
            'descDepartamento' => $oResultadoDepAjeno->getDescDepartamento(),
            'fechaCreacionDepartamento' => $oResultadoDepAjeno->getFechaCreacionDepartamento(),
            'volumenDeNegocio' => $oResultadoDepAjeno->getVolumenDeNegocio(),
            'fechaBajaDepartamento' => $oResultadoDepAjeno->getFechaBajaDepartamento()
        ];
    }else{
        $aErroresDepartamentoAjeno['eResultado'] = $oResultadoDepAjeno;
    }
}

//----------------------------------------------------------------------------------------------------------------------------------------------------

require_once $vistas['layout']; //Cargo la pagina de REST
?>
