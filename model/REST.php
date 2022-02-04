<?php

class REST {

    /**

     */
    public static function apod() {
        
        $api_key = 'wLlaZnbZhydhSJLcFAgF4Cdq8kfzRPArqb1GtwGF';
        $response = @file_get_contents("https://api.nasa.gov/planetary/apod?api_key={$api_key}");
        $JSONApod = json_decode($response, true);
       
        $rApod=$JSONApod['url'];

        return $rApod;
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
