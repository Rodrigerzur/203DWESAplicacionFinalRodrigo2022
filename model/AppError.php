<?php

class AppError{
    /**
     * Codigo del error
     * 
     * @var string 
     */
    private $codError;
    /**
     * Descripcion del error
     * 
     * @var string 
     */
    private $descError;
    /**
     * Archivo del error
     * 
     * @var string 
     */
    private $archivoError;
    /**
     * Linea del error
     * 
     * @var int 
     */
    private $lineaError;
    /**
     * Pagina siguiente
     * 
     * @var string 
     */
    private $paginaSiguiente;
    
    /**
     * Metodo magico __construct()
     * 
     * Metodo constructor de la clase AppError
     * 
     * @param string $codError Codigo de descripcion del error
     * @param string $descError Descripcion del error
     * @param string $archivoError Enlace del error
     * @param int $lineaError Linea en la que se ha producido el error
     * @param string $paginaSiguiente Pagina siguiente
     */
    function __construct($codError, $descError, $archivoError, $lineaError, $paginaSiguiente) {
        $this->codError = $codError;
        $this->descError = $descError;
        $this->archivoError = $archivoError;
        $this->lineaError = $lineaError;
        $this->paginaSiguiente = $paginaSiguiente;
    }
    /**
     * Metodo getCodError()
     * 
     * Metodo get que devuelve el codigo del error
     * 
     * @return string
     */
    function getCodError(){
        return $this->codError;
    }
    /**
     * Metodo getDescError()
     * 
     * Metodo get que devuelve la descripcion del error
     * 
     * @return string
     */
    function getDescError(){
       return $this->descError; 
    }
    /**
     * Metodo getArchivoError()
     * 
     * Metodo get que devuelve el archivo del error
     * 
     * @return string
     */
    function getArchivoError(){
       return $this->archivoError; 
    }
    /**
     * Metodo getLineaError()
     * 
     * Metodo get que devuelve la linea donde se producio el error
     * 
     * @return int 
     */
    function getLineaError(){
       return $this->lineaError; 
    }
    /**
     * Metodo getPaginaSiguiente()
     * 
     * Metodo get que devuelve la pagina siguiente
     * 
     * @return string
     */
    function getPaginaSiguiente(){
       return $this->paginaSiguiente; 
    }
}
?>