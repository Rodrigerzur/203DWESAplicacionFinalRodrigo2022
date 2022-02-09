<article class="titulopagina">
    <h2>Borrar cuenta</h2>
</article>
<form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
    <fieldset>
        <ul>
            <!--Campo Usuario OBLIGATORIO -->
            <li>
                <div>
                    <label for="CodUsuario"><p class="pUsuario">Usuario</p></label>
                    <input name="CodUsuario" id="CodUsuario2" type="text" value="<?php echo $usuarioMiCuenta ?>" readonly disabled>
                </div>
            </li>
            <!--Campo Descripcion OBLIGATORIO-->
            <li>
                <div>
                    <label for="DescUsuario"><p class="pDescripcion">Descripcion*</p></label>
                    <input name="DescUsuario" id="DescUsuario2" type="text" value="<?php echo $descripcionMiCuenta ?>" readonly disabled>
                </div>
            </li>
            <!--Campo Numero Conexiones OBLIGATORIO-->
            <li>
                <div>
                    <label for="NumConexiones"><p class="pDescripcion">Numero Conexiones</p></label>
                    <input name="NumConexiones" id="NumConexiones2" type="text" value="<?php echo $conexionesMiCuenta ?>" readonly disabled>
                </div>
            </li>
            <!--Campo Fecha Ultima Conexion OBLIGATORIO-->
            <li>
                <div>
                    <label for="FechaHoraUltimaConexion"><p class="pDescripcion">Fecha Ultima Conexion</p></label>
                    <input name="FechaHoraUltimaConexion" id="FechaHoraUltimaConexion2" type="text" value="<?php echo date('d/m/Y H:i:s', $ultimaconexionMiCuenta) ?>" readonly disabled>
                </div>
            </li>
            <!--Campo Password OBLIGATORIO-->
            <li>
                <div>
                    <label for="Password"><p class="pPassword">Password</p></label>
                    <input name="Password" id="Password2" type="password" value="<?php echo $passwordMiCuenta ?>" readonly disabled>
                </div>
            </li>
            <!--Campo Botones Aceptar, Cancelar y Eliminar Cuenta-->
            <p class="tituloMiCuentaEliminar">Confirme su accion<p>
            <li>
                <input type="submit" value="ACEPTAR" name="aceptar" class="aceptar"/>
                <input type="submit" value="CANCELAR" name="cancelar" class="cancelarperfil"/>
            </li>
        </ul>
    </fieldset>
</form>