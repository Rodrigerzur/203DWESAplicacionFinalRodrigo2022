<article class="titulopagina">
    <h2>Login</h2>
</article>
<main>
    <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
        <fieldset>
            <p>Iniciar sesión<p>
            <ul>
                <!--Campo Usuario OBLIGATORIO -->
                <li>
                    <div>
                        <label for="CodUsuario"><strong>Usuario*</strong></label>
                        <input name="CodUsuario" id="CodUsuario" type="text" value="<?php echo isset($_REQUEST['CodUsuario']) ? $_REQUEST['CodUsuario'] : null; ?>">
                       
                    </div>
                </li>
                <!--Campo Password OBLIGATORIO-->
                <li>
                    <div>
                        <label for="Password"><strong>Password*</strong></label>
                        <input name="Password" id="Password" type="password" value="<?php echo isset($_REQUEST['Password']) ? $_REQUEST['Password'] : null; ?>">
                       
                    </div>
                </li>
                <!--Campo Botones Entrar y Volver y Registrarse-->
                <li>
                    <input type="submit" value="Entrar" name="entrar" class="entrar"/>
                    <input type="submit" value="Volver" name="volver" class="volver"/>
                    <input type="submit" value="Registrarse" name="Registrarse" class="Registrarse"/>
                </li>
            </ul>
        </fieldset>
    </form>
</main>