<?php

if(isset($_REQUEST['cancelar'])){ //Si el usuario pulsa el boton de cancelar, mando al usuario a la pagina de mto departamentos
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior']; //Asigno a la pagina en curso la pagina anterior
    header('Location: index.php'); //Redireciono de nuevo a mto departamentos
    exit;
}

$aErrores = [ //Declaracion del array de errores
    'codDepartamento' => null,
    'descDepartamento' => null,
    'volumenDeNegocio' => null
];

$entradaOK = true; //Declaro entradaok a verdadero

if(isset($_REQUEST['crear'])){ //Si el usuario le da a crear
    $aErrores['codDepartamento'] = validacionFormularios::comprobarAlfabetico($_REQUEST['CodDepartamento'], 3, 3, OBLIGATORIO); //Compruebo si el codigo de departamento esta bien rellenado
    $aErrores['descDepartamento'] = validacionFormularios::comprobarAlfabetico($_REQUEST['DescDepartamento'], 255, 1, OBLIGATORIO); //Compruebo si la descripcion del departamento esta bien rellenada
    $aErrores['volumenDeNegocio'] = validacionFormularios::comprobarFloat($_REQUEST['VolumenNegocio'], 9999, 0, OBLIGATORIO); //Compruebo si el volumen de negocio esta bien rellenada
    
    $oDepartamentoValido = DepartamentoPDO::validaCodNoExiste($_REQUEST['CodDepartamento']); //Compruebo si el departamento existe con la funcion validarcodnoexiste
    if($oDepartamentoValido){ //Si me devuelve el objeto el departamento ya existe
        $aErrores['codDepartamento'] = 'El codigo ya existe.';
    } 
    
    //Comprobar si algun campo del array de errores ha sido rellenado
    foreach ($aErrores as $campo => $error) {//recorro el array errores
        if ($error != null) {//Compruebo si hay algun error
            $entradaOK = false;//Le doy el valor false a entradaOK
            $_REQUEST[$campo] = '';//Limpio el campo del formulario
        }
    }
}else{ //Si el usuario no le ha dado al boton de crear
   $entradaOK = false; 
}

if($entradaOK){//Si la entrada es correcta
    $oDepartamentoNuevo = DepartamentoPDO::altaDepartamento($_REQUEST['CodDepartamento'], $_REQUEST['DescDepartamento'], $_REQUEST['VolumenNegocio']); //Doy de alta el nuevo departamento
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior']; //Asigno a la pagina en curso la pagina anterior
    header('Location: index.php'); //Redirecciono a mto departamentos
    exit;
}

require_once $vistas['layout']; //Cargo la pagina de AltaDepartamento
?>