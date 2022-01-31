<?php

if(isset($_REQUEST['cancelar'])){ //Si el usuario pulsa el boton de cancelar, mando al usuario a la pagina de login
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior']; //Asigno a la pagina en curso la pagina de login
    header('Location: index.php'); //Redireciono de nuevo a inicio publico
    exit;
}

$aErrores = [
    'codUsuario' => null,
    'descUsuario' => null,
    'password' => null,
    'repetirPassword' => null
];

$entradaOK = true;

if(isset($_REQUEST['crear'])){
    $aErrores['codUsuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['CodUsuario'], 10, 1, OBLIGATORIO); //Compruebo si el nombre de usuario esta bien rellenado
    $aErrores['descUsuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['DescUsuario'], 200, 1, OBLIGATORIO); //Compruebo si la descripcion del usuario esta bien rellenada
    $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['Password'], 8, 1, 1, OBLIGATORIO); //Compruebo si la password esta bien rellenada
    $aErrores['repetirPassword'] = validacionFormularios::validarPassword($_REQUEST['RepetirPassword'], 8, 1, 1, OBLIGATORIO); //Compruebo si la password repetida esta bien rellenada
    
    $oUsuarioValido = UsuarioPDO::validarCodNoExiste($_REQUEST['CodUsuario']); //Compruebo si el usuario existe con la funcion buscar usuario por cod
    if($oUsuarioValido){ //Si me devuelve el objeto el usuario ya existe
        $sError['codUsuario'] = 'El usuario ya existe.';
    }
         
    if($_REQUEST['Password'] != $_REQUEST['RepetirPassword']){
        $aErrores['repetirPassword'] = "Las contraseñas no coinciden";
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
    $oUsuarioNuevo = UsuarioPDO::altaUsuario($_REQUEST['CodUsuario'], $_REQUEST['Password'], $_REQUEST['DescUsuario']);
    $_SESSION['usuario203DWESLogInLogOutMulticapa'] = $oUsuarioNuevo; //Guardo en la sesion el contenido del usuario nuevo
    $_SESSION['paginaEnCurso'] = 'inicioprivado'; //Asigno a la pagina en curso la pagina de inicio privado
    header('Location: index.php'); //Redirecciono a inicio privado
    exit;
}

require_once $vistas['layout']; //Cargo la pagina de registro
?>