<article class="titulopagina">
    <h2>REST</h2>
</article>
<form class="buttonback">
    <input type="submit" value="Volver" name="volver" class="volver"/>
</form>

<form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form" id="formularioapod">
    <fieldset class="fieldsetapod">
        <input type="submit" value="Mostrar APOD" name="mostrarAPOD" class="volver"/>

        <?php
        if(isset($_REQUEST['mostrarAPOD'])){
        $patron = "/youtube/";
        if (preg_match($patron, $iAPOD)) {
            ?>
            <iframe width="420" height="315"
                    src=" <?php echo ($iAPOD) ?? "" ?> ">
            </iframe>
            <?php
        } else {
            ?>
            <img src=" <?php echo ($iAPOD) ?? "" ?> " class="apod"> 
            <?php
        }
        }
        ?>
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
                    <label for="miDivisa"><p class="pDivisa">Divisa*</a></p></label>
                    <select required name="miDivisa" id="CodDivisa">
                        <option value="">Elige Moneda</option>
                        <option value="EUR">Euro</option>
                        <option value="USD">Dolar</option>
                        <option value="FJD">Dólar fiyiano</option>
                        <option value="FKP">Libra malvinense</option>
                        <option value="GBP">Libra esterlina</option>
                        <option value="JPY">Yen</option>
                        <option value="LBP">Libra libanesa</option>
                        <option value="MXN">Peso Mexicano</option>
                        <option value="GIP">Libra de Gibraltar</option>
                        <option value="CZK">Corona Checa</option>
                        <option value="CNY">Yuan Chino</option>
                        <option value="UYU">Peso Uruguayo</option>
                        <option value="AED">Dírham</option>
                        <option value="AFN">Afgani</option>
                        <option value="ALL">Lek</option>
                        <option value="AMD">Dram armenio</option>
                        <option value="ANG">Florín antillano neerlandés</option>
                        <option value="AOA">Kwanza</option>
                        <option value="BSD">Dólar bahameño</option>
                        <option value="BTN">Ngultrum</option>
                        <option value="BWP">Pula</option>
                        <option value="COP">Peso colombiano</option>
                        <option value="CRC">Colón costarricense</option>
                        <option value="FJD">Dólar fiyiano</option>
                        <option value="FKP">Libra malvinense</option>
                        <option value="HKD">Dólar de Hong Kong</option>
                        <option value="HTG">Gourde</option>
                        <option value="ISK">Corona islandesa</option>
                        <option value="JMD">Dólar jamaiquino</option>
                        <option value="LSL">Loti</option>
                        <option value="LYD">Dinar libio</option>
                        <option value="MRU">Uguiya</option>
                        <option value="MUR">Rupia de Mauricio</option>
                        <option value="QAR">Rial catarí</option>
                        <option value="TRY">Lira turca</option>
                        <option value="UAH">Grivna</option>
                        <option value="VES">Bolívar soberano</option>
                    </select>
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
                    <select required name="otraDivisa" id="CodPasar">
                        <option value="">Elige Moneda</option>
                        <option value="EUR">Euro</option>
                        <option value="USD">Dolar</option>
                        <option value="FJD">Dólar fiyiano</option>
                        <option value="FKP">Libra malvinense</option>
                        <option value="GBP">Libra esterlina</option>
                        <option value="JPY">Yen</option>
                        <option value="LBP">Libra libanesa</option>
                        <option value="MXN">Peso Mexicano</option>
                        <option value="GIP">Libra de Gibraltar</option>
                        <option value="CZK">Corona Checa</option>
                        <option value="CNY">Yuan Chino</option>
                        <option value="UYU">Peso Uruguayo</option>
                        <option value="AED">Dírham</option>
                        <option value="AFN">Afgani</option>
                        <option value="ALL">Lek</option>
                        <option value="AMD">Dram armenio</option>
                        <option value="ANG">Florín antillano neerlandés</option>
                        <option value="AOA">Kwanza</option>
                        <option value="BSD">Dólar bahameño</option>
                        <option value="BTN">Ngultrum</option>
                        <option value="BWP">Pula</option>
                        <option value="COP">Peso colombiano</option>
                        <option value="CRC">Colón costarricense</option>
                        <option value="FJD">Dólar fiyiano</option>
                        <option value="FKP">Libra malvinense</option>
                        <option value="HKD">Dólar de Hong Kong</option>
                        <option value="HTG">Gourde</option>
                        <option value="ISK">Corona islandesa</option>
                        <option value="JMD">Dólar jamaiquino</option>
                        <option value="LSL">Loti</option>
                        <option value="LYD">Dinar libio</option>
                        <option value="MRU">Uguiya</option>
                        <option value="MUR">Rupia de Mauricio</option>
                        <option value="QAR">Rial catarí</option>
                        <option value="TRY">Lira turca</option>
                        <option value="UAH">Grivna</option>
                        <option value="VES">Bolívar soberano</option>
                    </select>
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