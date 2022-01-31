<?php

interface DB{
    /**
     * Metodo ejecutarConsulta()
     * 
     * Metodo que ejecuta una consulta, recibe una sentencia SQL y puede recibir parametros
     * 
     * @param string $sentenciaSQL Sentencia SQL para ejecutar
     * @param array|null $parametros Parametros que se le pueden pasar a la sentencia
     */
    public static function ejecutarConsulta($sentenciaSQL, $parametros = null);
}
