<article class="titulopagina">
    <h2>Editar Perfil</h2>
</article>
<form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
    <fieldset>
        <p class="tituloMiCuenta">Editar Perfil de Usuario<p>
        <ul>
            <!--Campo Usuario OBLIGATORIO -->
            <li>
                <div>
                    <label for="CodUsuario"><strong>Usuario</strong></label>
                    <input name="CodUsuario" id="CodUsuario" type="text" value="<?php echo $usuarioMiCuenta ?>" readonly disabled>
                </div>
            </li>
            <!--Campo Descripcion OBLIGATORIO-->
            <li>
                <div>
                    <label for="DescUsuario"><strong>Descripcion*</strong></label>
                    <input name="DescUsuario" id="DescUsuario2" type="text" value="<?php echo isset($_REQUEST['DescUsuario']) ? $_REQUEST['DescUsuario'] : $descripcionMiCuenta; ?>" 
                           placeholder="Introduzca la descripcion">
                    <p class="mensajeError"><?php echo $aErrores['descUsuario'] ?></p>
                </div>
            </li>
            <!--Campo Numero Conexiones OBLIGATORIO-->
            <li>
                <div>
                    <label for="NumConexiones"><strong>Numero Conexiones</strong></label>
                    <input name="NumConexiones" id="NumConexiones2" type="text" value="<?php echo $conexionesMiCuenta ?>" readonly disabled>
                </div>
            </li>
            <!--Campo Fecha Ultima Conexion OBLIGATORIO-->
            <li>
                <div>
                    <label for="FechaHoraUltimaConexion"><strong>Fecha Ultima Conexion</strong></label>
                    <input name="FechaHoraUltimaConexion" id="FechaHoraUltimaConexion2" type="text" value="<?php echo date('d/m/Y H:i:s', $ultimaconexionMiCuenta) ?>" readonly disabled>
                </div>
            </li>
            <!--Campo Password OBLIGATORIO-->
            <li>
                <div>
                    <label for="Password"><strong>Password</strong></label>
                    <input name="Password" id="Password2" type="password" value="<?php echo $passwordMiCuenta ?>" readonly disabled>
                </div>
            </li>
            <!--Campo Boton Cambiar Password-->
            <li>
                <input type="submit" value="CAMBIAR PASSWORD" name="cambiarpassword" class="cambiarpassword"/>
            </li>
            <!--Campo Botones Aceptar, Cancelar y Eliminar Cuenta-->
            <li>
                <input type="submit" value="ACEPTAR" name="aceptar" class="aceptar"/>
                <input type="submit" value="CANCELAR" name="cancelar" class="cancelarperfil"/>
                <input type="submit" value="ELIMINAR USUARIO" name="eliminarcuenta" class="eliminarcuenta"/>
            </li>
        </ul>
    </fieldset>
</form>