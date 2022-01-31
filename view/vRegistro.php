<article class="titulopagina">
    <h2>Registro</h2>
</article>
<form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
    <fieldset>
        <p class="tituloRegistros">Registro nuevo usuario<p>
        <ul>
            <!--Campo Usuario OBLIGATORIO -->
            <li>
                <div>
                    <label for="CodUsuario"><strong>Usuario*</strong></label>
                    <input name="CodUsuario" id="CodUsuarioReg" type="text" value="<?php echo isset($_REQUEST['CodUsuario']) ? $_REQUEST['CodUsuario'] : null; ?>" 
                           placeholder="Introduzca el nombre de usuario">
                    <p class="mensajeError"><?php echo $aErrores['codUsuario'] ?></p>
                </div>
            </li>
            <!--Campo Descripcion OBLIGATORIO-->
            <li>
                <div>
                    <label for="DescUsuario"><strong>Descripcion*</strong></label>
                    <input name="DescUsuario" id="DescUsuario" type="text" value="<?php echo isset($_REQUEST['DescUsuario']) ? $_REQUEST['DescUsuario'] : null; ?>" 
                           placeholder="Introduzca la descripcion">
                    <p class="mensajeError"><?php echo $aErrores['descUsuario'] ?></p>
                </div>
            </li>
            <!--Campo Password OBLIGATORIO-->
            <li>
                <div>
                    <label for="Password"><strong>Password*</strong></label>
                    <input name="Password" id="PasswordReg" type="password" value="<?php echo isset($_REQUEST['Password']) ? $_REQUEST['Password'] : null; ?>" 
                           placeholder="Introduzca la password">
                    <p class="mensajeError"><?php echo $aErrores['password'] ?></p>
                </div>
            </li>
            <!--Campo Password Repetir OBLIGATORIO-->
            <li>
                <div>
                    <label for="RepetirPassword"><strong>Repetir Password*</strong></label>
                    <input name="RepetirPassword" id="RepetirPassword" type="password" value="<?php echo isset($_REQUEST['RepetirPassword']) ? $_REQUEST['RepetirPassword'] : null; ?>" 
                           placeholder="Introduzca la password de nuevo">
                    <p class="mensajeError"><?php echo $aErrores['repetirPassword'] ?></p>
                </div>
            </li>
            <!--Campo Botones Crear y Cancelar-->
            <li>
                <input type="submit" value="CREAR" name="crear" class="crear"/>
                <input type="submit" value="CANCELAR" name="cancelar" class="cancelar"/>
            </li>
        </ul>
    </fieldset>
</form>