<?php

class REST {

    /**

     */
    public static function apod() {
        $media = ''; # initialize empty item
        $entry = ''; # initialize empty item
        $api_key = 'wLlaZnbZhydhSJLcFAgF4Cdq8kfzRPArqb1GtwGF';
        $apod_token = 'nasa_planetary_apod';

        /**
         * Check if the apod exists in the cache
         */
        /**
         * If the item is not found in the cache
         * then make request to the remote resource
         * and push it to the cache system
         */
        $response = @file_get_contents("https://api.nasa.gov/planetary/apod?api_key="{$claveAPI});

        /**
         * If the response code is OK then save
         * the input to Memcached for 1 hour
         *
         * The contents will be in JSON format
         */
        $apod = $response;





        /**
         * Unserialize the JSON to make an Object
         */
        $apod = json_decode($apod);

        if (TRUE === is_object($apod)) {
            $template = <<<'EOD'
    <article>
        <header>
            <h2 class="text-center">Astronomy Picture of the Day</h2>
        </header>
        <figure>
            <!-- media -->
            %5$s
            <figcaption>
                <header>
                    <p>%1$s</p>
                    <h1>%2$s <small>&copy; %3$s</small></h1>
                </header>
                <main>
                    <p>%4$s</p>
                </main>
                <footer>
                    <p>More at <a href="%6$s">%6$s</a></p>
                </footer>
            </figcaption>
        </figure>
    </article>
EOD;

            if ('image' == $apod->media_type) {
                $media_template = <<< 'EOD'
            <a href="%s"><img src="%s" alt="%s"></a>
EOD;
                $media = sprintf($media_template, $apod->hdurl, $apod->url, $apod->title);
            } elseif ('video' == $apod->media_type) {
                $media_template = <<< 'EOD'
            <iframe width="960" height="540" src="%s"></iframe>
EOD;
                $media = sprintf($media_template, $apod->url);
            }

            $date = (new IntlDateFormatter(Locale::getDefault(),
                            IntlDateFormatter::LONG,
                            IntlDateFormatter::LONG,
                            date_default_timezone_get(),
                            IntlDateFormatter::GREGORIAN))->format(new DateTime($apod->date));

            $data = [$date
                , mb_convert_case($apod->title, MB_CASE_TITLE, "UTF-8")
                , $apod->copyright
                , $apod->explanation
                , $media
                , 'http://apod.nasa.gov/apod/astropix.html'];

            return $entry = vsprintf($template, $data);
        }
    }

    /**
     * Metodo conversorMoneda() de la aplicacion final de Alberto
     * 
     * Metodo que permite obtener el valor de mi moneda en el de la que le pase como parametro
     * 
     * @param string $sDivisaPrincipal Moneda a convertir
     * @param string $sOtraDivisa Divisa a la que convertir
     * @return float Resultado de la conversion
     */
    public static function conversorMoneda($sDivisaPrincipal, $sOtraDivisa) {
        $iDevolucion = 0; //Inicializo el valor de la devolucion a 0
        $claveAPI = "2fb5f0e8f0ce47116b050ae0"; //La clave generada para poder usar la API
        $resultadoAPI = @file_get_contents("https://v6.exchangerate-api.com/v6/{$claveAPI}/latest/{$sDivisaPrincipal}"); //La respuesta de la api en formato json

        $JSONDecodificado = json_decode($resultadoAPI, true); //Almaceno la informacion decodificada obtenida de la url como un array
        if (isset($JSONDecodificado['result']) == "success") { //Si la respuesta ha sido correcta
            foreach ($JSONDecodificado['conversion_rates'] as $campo => $valor) { //Recorremos el array de la respuesta
                if ($campo == $sOtraDivisa) {
                    $iDevolucion = $valor; //Almaceno el valor correspondiente en la variable de devolucion
                }
            }
        }
        if (isset($JSONDecodificado['result']) == "error") { //Si la respuesta ha sido incorrecta
            return $iDevolucion;
        }

        return $iDevolucion; //Devuelvo el resultado
    }

}
