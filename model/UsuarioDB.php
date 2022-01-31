<?php

interface UsuarioDB{
    /**
     * Metodo validarUsuario()
     * 
     * Validar datos del usuario en la base de datos
     * 
     * @param string $codUsuario Codigo del usuario a validar
     * @param string $password Password del usuario a validar
     */
    public static function validarUsuario($codUsuario, $password);
}