<article class="titulopagina">
    <h2>Borrar cuenta</h2>
</article>
<main>
    <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="formRegistro">
        <fieldset>
            <p class="tituloRegistros">Dar de baja departamento<p>
            <ul>
                <!--Campo Codigo OBLIGATORIO -->
                <li>
                    <div>
                        <label for="CodDepartamento"><p class="pUsuario">Código</p></label>
                        <input name="CodDepartamento" id="CodUsuario2" type="text" value="<?php echo $aDepartamento['codDepartamento'] ?>" readonly disabled>
                    </div>
                </li>
                <!--Campo Descripcion OBLIGATORIO -->
                <li>
                    <div>
                        <label for="DescDepartamento"><p class="pUsuario">Descripción</p></label>
                        <input name="DescDepartamento" id="CodUsuario2" type="text" value="<?php echo $aDepartamento['descDepartamento'] ?>" readonly disabled>
                    </div>
                </li>
                <!--Campo Fecha Creacion OBLIGATORIO -->
                <li>
                    <div>
                        <label for="FechaCreacionDepartamento"><p class="pUsuario">Fecha de Creacion</p></label>
                        <input name="FechaCreacionDepartamento" id="CodUsuario2" type="text" value="<?php echo date('d/m/Y H:i:s', $aDepartamento['fechaCreacionDepartamento']) ?>" readonly disabled>
                    </div>
                </li>
                <!--Campo Volumen Negocio OBLIGATORIO -->
                <li>
                    <div>
                        <label for="VolumenNegocioDepartamento"><p class="pUsuario">Volumen de negocio</p></label>
                        <input name="VolumenNegocioDepartamento" id="CodUsuario2" type="text" value="<?php echo $aDepartamento['volumenNegocioDepartamento'] ?>" readonly disabled>
                    </div>
                </li>
                <!--Campo Botones Dar de baja y Cancelar-->
                <li>
                    <input type="submit" value="dar de baja" name="dardebaja" class="dardebaja" onclick="return confirmarDarDeBaja()"/>
                    <span class="linebreak">O</span>
                    <input type="submit" value="CANCELAR" name="cancelar" class="cancelar"/>
                </li>
            </ul>
        </fieldset>
    </form>
</main>