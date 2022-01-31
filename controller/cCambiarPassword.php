<?php

if(isset($_REQUEST['cancelar'])){ //Si el usuario pulsa el boton de cancelar, mando al usuario a la pagina de micuenta
    $_SESSION['paginaEnCurso'] = 'micuenta'; //Asigno a la pagina en curso la pagina micuenta
    header('Location: index.php'); //Redireciono de nuevo a micuenta
    exit;
}

$aErrores = [
    'passwordActual' => null,
    'passwordNueva' => null,
    'passwordRepetir' => null
];

$entradaOK = true;//Variable de entrada correcta inicializada a true
        
if(isset($_REQUEST['aceptar'])){
    $aErrores['passwordActual'] = validacionFormularios::validarPassword($_REQUEST['PasswordActual'], 8, 1, 1, OBLIGATORIO);  //Compruebo si la password esta bien rellenada
    $aErrores['passwordNueva'] = validacionFormularios::validarPassword($_REQUEST['PasswordNueva'], 8, 1, 1, OBLIGATORIO); //Compruebo si la password esta bien rellenada
    $aErrores['passwordRepetir'] = validacionFormularios::validarPassword($_REQUEST['RepetirPasswordNueva'], 8, 1, 1, OBLIGATORIO); //Compruebo si la password repetida esta bien rellenada)
    
    if(!UsuarioPDO::validarUsuario($_SESSION['usuario203DWESLogInLogOutMulticapa']->getCodUsuario(), $_REQUEST['PasswordActual'])){
        $aErrores['passwordActual'] = 'Password incorrecta';
        $entradaOK = false;//Le doy el valor false a entradaOK
    }else{
        if($_REQUEST['PasswordNueva'] != $_REQUEST['RepetirPasswordNueva']){ //Compruebo si la password nueva coincide con la password nueva repetida
            $aErrores['PasswordNueva'] = "Las passwords no coinciden!";
            $aErrores['RepetirPasswordNueva'] = "Las passwords no coinciden!";
        }
        
        //Comprobar si algun campo del array de errores ha sido rellenado
        foreach ($aErrores as $campo => $error) {//recorro el array errores
            if ($error != null) {//Compruebo si hay algun error
                $entradaOK = false;//Le doy el valor false a entradaOK
                $_REQUEST[$campo] = '';//Limpio el campo del formulario
            }
        }
    }
}else{ //Si el usuario no le ha dado al boton de aceptar
    $entradaOK = false;
}

if($entradaOK){
    $_SESSION['usuario203DWESLogInLogOutMulticapa'] = UsuarioPDO::cambiarPassword($_SESSION['usuario203DWESLogInLogOutMulticapa'], $_REQUEST['PasswordNueva']);
    $_SESSION['paginaEnCurso'] = 'micuenta'; //Asigno a la pagina en curso la pagina micuenta
    header('Location: index.php'); //Redireciono de nuevo a micuenta
    exit;
}

require_once $vistas['layout']; //Cargo la pagina de cambiarPassword
?>
