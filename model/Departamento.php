<?php

class Departamento {
    /**
     * Codigo del departamento
     * 
     * @var string 
     */
    private $codDepartamento;
    /**
     * Descripcion del departamento
     * 
     * @var string
     */
    private $descDepartamento;
    /**
     * Fecha de creacion del departamento
     * 
     * @var int 
     */
    private $fechaCreacionDepartamento;
    /**
     * Volumen del negocio
     * 
     * @var int 
     */
    private $volumenDeNegocio;
    /**
     * Fecha de baja del departamento
     * 
     * @var int 
     */
    private $fechaBajaDepartamento;
    /**
     * 
     * @param string $codDepartamento Codigo del departamento
     * @param string $descDepartamento Descripcion del departamento
     * @param int $fechaCreacionDepartamento Fecha de creacion del departamento
     * @param int $volumenDeNegocio Volumen del negocio
     * @param int $fechaBajaDepartamento Fecha de baja del departamento
     */
    function __construct($codDepartamento,$descDepartamento,$fechaCreacionDepartamento,$volumenDeNegocio,$fechaBajaDepartamento = null) {
        $this->codDepartamento = $codDepartamento;
        $this->descDepartamento = $descDepartamento;
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
        $this->volumenDeNegocio = $volumenDeNegocio;
        $this->fechaBajaDepartamento = $fechaBajaDepartamento;
    }
    /**
     * Metodo getCodDepartamento()
     * 
     * Metodo get que devuelve el codigo del departamento
     * 
     * @return string Codigo del departamento
     */
    function getCodDepartamento(){
        return $this->codDepartamento;
    }
    /**
     * Metodo getDescDepartamento()
     * 
     * Metodo get que devuelve la descripcion del departamento
     * 
     * @return string Descripcion del departamento
     */
    function getDescDepartamento(){
        return $this->descDepartamento;
    }
    /**
     * Metodo getFechaCreacionDepartamento()
     * 
     * Metodo get que devuelve la fecha de creacion del departamento
     * 
     * @return int Fecha de creacion del departamento
     */
    function getFechaCreacionDepartamento(){
        return $this->fechaCreacionDepartamento;
    }
    /**
     * Metodo getVolumenDeNegocio()
     * 
     * Metodo get que devuelve el volumen de negocio del departamento
     * 
     * @return int Volumen del negocio
     */
    function getVolumenDeNegocio(){
        return $this->volumenDeNegocio;
    }
    /**
     * Metodo getFechaBajaDepartamento()
     * 
     * Metodo get que devuelve la fecha de baja del departamento
     * 
     * @return int Fecha de baja del departamento
     */
    function getFechaBajaDepartamento(){
        return $this->fechaBajaDepartamento;
    }
    /**
     * Metodo setCodDepartamento()
     * 
     * Metodo set que cambia el valor del atributo $codDepartamento
     * 
     * @param string $codDepartamento Nuevo codigo del departamento
     */
    function setCodDepartamento($codDepartamento){
        $this->codDepartamento = $codDepartamento;
    }
    /**
     * Metodo setDescDepartamento()
     * 
     * Metodo set que cambia el valor del atributo $descDepartamento
     * 
     * @param string $descDepartamento Nueva descripcion del departamento
     */
    function setDescDepartamento($descDepartamento){
        $this->descDepartamento = $descDepartamento;
    }
    /**
     * Metodo setFechaCreacionDepartamento()
     * 
     * Metodo set que cambia el valor del atributo $fechaCreacionDepartamento
     * 
     * @param int $fechaCreacionDepartamento Nueva fecha de creacion del departamento
     */
    function setFechaCreacionDepartamento($fechaCreacionDepartamento){
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
    }
    /**
     * Metodo setVolumenNegocio()
     * 
     * Metodo set que cambia el valor del atributo $volumenDeNegocio
     * 
     * @param int $volumenDeNegocio Nuevo volumen negocio del departamento
     */
    function setVolumenNegocio($volumenDeNegocio){
        $this->volumenDeNegocio = $volumenDeNegocio;
    }
    /**
     * Metodo setFechaBajaDepartamento()
     * 
     * Metodo set que cambia el valor del atributo $fechaBajaDepartamento
     * 
     * @param int $fechaBajaDepartamento Nueva fecha de baja del departamento
     */
    function setFechaBajaDepartamento($fechaBajaDepartamento){
        $this->fechaBajaDepartamento = $fechaBajaDepartamento;
    }
}
?>