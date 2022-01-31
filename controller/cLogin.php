<?php

if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de volver, mando al usuario a la pagina de inicio publico
    $_SESSION['paginaEnCurso'] = 'iniciopublico'; //Asigno a la pagina en curso la pagina de inicio publico
    header('Location: index.php'); //Redireciono de nuevo a inicio publico
    exit;
}

if(isset($_REQUEST['Registrarse'])){ //Si el usuario pulsa el boton de Registrarse, mando al usuario a la pagina de registro
    $_SESSION['paginaAnterior'] = 'login';
    $_SESSION['paginaEnCurso'] = 'registro'; //Asigno a la pagina en curso la pagina de registro
    header('Location: index.php'); //Redireciono de nuevo a registro
    exit;
}

$aErrores = [
    'codUsuario' => null,
    'password' => null
];

$entradaOK = true;//Variable de entrada correcta inicializada a true

if (isset($_REQUEST['entrar'])) { //Si le ha dado al boton de enviar valido los datos
    $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['CodUsuario'], 8, 4, OBLIGATORIO); //Valido los datos pasados por teclado del usuario
    $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['Password'], 8, 4, OBLIGATORIO); //Valido los datos pasados por teclado de la password
    
    $oUsuarioValido = UsuarioPDO::validarUsuario($_REQUEST['CodUsuario'], $_REQUEST['Password']);//Compruebo si el usuario existe con la funcion validarUsuario
    if(!isset($oUsuarioValido)){ //Si el usuario no existe la entrada es falsa
        $entradaOK = false;
    }
    //Comprobar si algun campo del array de errores ha sido rellenado
    foreach ($aErrores as $campo => $error) {//recorro el array errores
        if ($error != null) {//Compruebo si hay algun error
            $entradaOK = false;//Le doy el valor false a entradaOK
            $_REQUEST[$campo] = '';//Limpio el campo del formulario
        }
    }
}else{ //Si el usuario no le ha dado al boton de entrar
    $entradaOK = false;
}

if($entradaOK){
    $oUsuarioValido = UsuarioPDO::registrarUltimaConexion($oUsuarioValido); //Registro la ultima conexion y actualizo el numero de conexiones con el metodo registrarUltimaConexion
    $_SESSION['usuario203DWESLogInLogOutMulticapa'] = $oUsuarioValido; //Guardo en la sesion el contenido del usuario valido
    $_SESSION['paginaEnCurso'] = 'inicioprivado'; //Asigno a la pagina en curso la pagina de inicio privado
    header('Location: index.php'); //Redirecciono a inicio privado
    exit;
}

require_once $vistas['layout'];//Cargo la pagina de login
?>