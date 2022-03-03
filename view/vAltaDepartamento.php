<article class="titulopagina">
    <h2>Alta Departamentos</h2>
</article>
<main>
    <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
        <fieldset>
            <p class="tituloRegistros">Alta de nuevo departamento<p>
            <ul>
                <!--Campo Codigo OBLIGATORIO -->
                <li>
                    <div>
                        <label for="CodDepartamento"><p class="pUsuario">Código*</p></label>
                        <input name="CodDepartamento" id="CodUsuarioReg" type="text" value="<?php echo isset($_REQUEST['CodDepartamento']) ? $_REQUEST['CodDepartamento'] : null; ?>" 
                               placeholder="Introduzca el código">
                        <p class="mensajeErrorAltaDep"><?php echo $aErrores['codDepartamento'] ?></p>
                    </div>
                </li>
                <!--Campo Descripcion OBLIGATORIO -->
                <li>
                    <div>
                        <label for="DescDepartamento"><p class="pUsuario">Descripción*</p></label>
                        <input name="DescDepartamento" id="CodUsuarioReg" type="text" value="<?php echo isset($_REQUEST['DescDepartamento']) ? $_REQUEST['DescDepartamento'] : null; ?>" 
                               placeholder="Introduzca la descripción">
                        <p class="mensajeErrorAltaDep"><?php echo $aErrores['descDepartamento'] ?></p>
                    </div>
                </li>
                <!--Campo Volumen de negocio OBLIGATORIO -->
                <li>
                    <div>
                        <label for="VolumenNegocio"><p class="pUsuario">Volumen de negocio*</p></label>
                        <input name="VolumenNegocio" id="CodUsuarioReg" type="text" value="<?php echo isset($_REQUEST['VolumenNegocio']) ? $_REQUEST['VolumenNegocio'] : null; ?>" 
                               placeholder="Introduzca el volumen de negocio">
                        <p class="mensajeErrorAltaDep"><?php echo $aErrores['volumenDeNegocio'] ?></p>
                    </div>
                </li>
                <!--Campo Botones Crear y Cancelar-->
                <li>
                    <input type="submit" value="CREAR" name="crear" class="crear"/>
                    <span class="linebreak">O</span>
                    <input type="submit" value="CANCELAR" name="cancelar" class="cancelar"/>
                </li>
            </ul>
        </fieldset>
    </form>
</main>