<article class="titulopagina">
    <h2>REST</h2>
</article>
<form class="buttonback">
    <input type="submit" value="Volver" name="volver" class="volver"/>
</form>

<form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form" id="formularioapod">
    <fieldset class="fieldsetapod">
        <input type="submit" value="Mostrar APOD" name="mostrarAPOD" class="volver"/>
        <img src=" <?php echo ($iAPOD)??"" ?> " class="apod"> 
        <iframe width="420" height="315"
src=" <?php echo ($iAPOD)??"" ?> ">
</iframe>
    </fieldset>
</form>

<form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form" id="formularioconversor">
    <fieldset>
        <p class="tituloiniciarsesion">Valor de Moneda<p>

        <p class="pInformacion">Permite pasar la cantidad 1 de la divisa que le pases en el primer campo a otra divisa que le pases en el segundo campo. El formato del campo es con el codigo de la moneda, el cual esta formado por tres letras. Ejemplo: EUR a USD.</p>

        <ul>
            <!--Campo miDivisa OBLIGATORIO -->
            <li>
                <div class="imageninformacion">
                    <label for="miDivisa"><p class="pDivisa">Divisa*<a href="https://www.exchangerate-api.com/docs/standard-requests" target="_blank"></a></p></label>
                    <div class="vercomousar">
                        <p>Ejemplos de codigos de moneda disponibles: EUR: Euro, USD: Dolar, FJD: Dólar fiyiano, FKP: Libra malvinense ,GBP: Libra esterlina, JPY: Yen, LBP: Libra libanesa, MXN: Peso Mexicano, GIP: Libra de Gibraltar, CZK: Corona Checa, CNY: Yuan Chino, UYU: Peso Uruguayo, HUF: Forinto</p>
                    </div>
                    <input name="miDivisa" id="CodDivisa" type="text" value="<?php echo isset($_REQUEST['miDivisa']) ? $_REQUEST['miDivisa'] : null; ?>" placeholder="Codigo de Moneda">
                    <p class="mensajeErrorRest"><?php echo $aErrores['miDivisa'] ?></p>
                </div>
            </li>
            <!--Campo Importe Conversion-->
            <li>
                <div>
                    <label for="cantidad"><p class="pDivisa">Cantidad</p></label>
                    <input name="cantidad" id="Cantidad" type="text" value="1" readonly disabled>
                </div>
            </li>
            <!--Campo otraDivisa OBLIGATORIO-->
            <li>
                <div>
                    <label for="otraDivisa"><p class="pPasar">Pasar a*</p></label>
                    <input name="otraDivisa" id="CodPasar" type="text" value="<?php echo isset($_REQUEST['otraDivisa']) ? $_REQUEST['otraDivisa'] : null; ?>" placeholder="Codigo de Moneda">
                    <p class="mensajeErrorRest"><?php echo $aErrores['otraDivisa'] ?></p>
                </div>
            </li>
            <!--Campo Resultado Conversion-->
            <li>
                <div>
                    <label for="Resultado"><p class="pPasar">Resultado</p></label>
                    <input name="Resultado" id="Resultado" type="text" value="<?php echo $iDevolucion ?>" readonly disabled>
                </div>
            </li>
            <!--Campo Boton CONVERTIR-->
            <li>
                <input type="submit" value="CONVERTIR" name="convertir" class="convertir"/>
            </li>
        </ul>
    </fieldset>
</form>