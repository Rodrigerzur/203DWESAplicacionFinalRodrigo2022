<article class="titulopagina">
    <h2>Cambiar Password</h2>
</article>
<form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
    <fieldset>
        <p class="tituloCambiarPassword">Cambiar Contraseña<p>
        <ul>
            <!--Campo Password Actual OBLIGATORIO-->
            <li>
                <div>
                    <label for="PasswordActual"><strong>Password Actual*</strong></label>
                    <input name="PasswordActual" id="PasswordActual" type="password" value="<?php echo isset($_REQUEST['PasswordActual']) ? $_REQUEST['PasswordActual'] : null; ?>" 
                           placeholder="Introduzca la password actual">
                    <p class="mensajeError"><?php echo $aErrores['passwordActual'] ?></p>
                </div>
            </li>
            <!--Campo Password Nueva OBLIGATORIO-->
            <li>
                <div>
                    <label for="PasswordNueva"><strong>Nueva Password*</strong></label>
                    <input name="PasswordNueva" id="PasswordNueva" type="password" value="<?php echo isset($_REQUEST['PasswordNueva']) ? $_REQUEST['PasswordNueva'] : null; ?>" 
                           placeholder="Introduzca la password nueva">
                    <p class="mensajeError"><?php echo $aErrores['passwordNueva'] ?></p>
                </div>
            </li>
            <!--Campo Password Nueva Repetir OBLIGATORIO-->
            <li>
                <div>
                    <label for="RepetirPasswordNueva"><strong>Repetir Nueva Password*</strong></label>
                    <input name="RepetirPasswordNueva" id="RepetirPasswordNueva" type="password" value="<?php echo isset($_REQUEST['RepetirPasswordNueva']) ? $_REQUEST['RepetirPasswordNueva'] : null; ?>" 
                           placeholder="Introduzca la password de nuevo">
                    <p class="mensajeError"><?php echo $aErrores['passwordRepetir'] ?></p>
                </div>
            </li>

            <!--Campo Botones Aceptar, Cancelar y Eliminar Cuenta-->
            <li>
                <input type="submit" value="ACEPTAR" name="aceptar" class="aceptar"/>
                <input type="submit" value="CANCELAR" name="cancelar" class="cancelar"/>
            </li>
        </ul>
    </fieldset>
</form>