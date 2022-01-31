<?php

class Usuario{
    /**
     * Codigo del usuario
     * 
     * @var string 
     */
    private $codUsuario;
    /**
     * Password del usuario
     * 
     * @var string 
     */
    private $password;
    /**
     * Descripcion del usuario
     * 
     * @var string 
     */
    private $descUsuario;
    /**
     * Numero de conexiones del usuario
     * 
     * @var int 
     */
    private $numConexiones;
    /**
     * Fecha y hora de la ultima conexion del usuario
     * 
     * @var int 
     */
    private $fechaHoraUltimaConexion;
    /**
     * Fecha y hora de la ultima conexion anterior del usuario
     * 
     * @var int 
     */
    private $fechaHoraUltimaConexionAnterior;
    /**
     * Imagen del usuario
     * 
     * @var string 
     */
    private $imagenUsuario;
    /**
     * Tipo de perfil del usuario
     * 
     * @var string 
     */
    private $perfil;
    
    /**
     * Metodo magico __construct()
     * 
     * Metodo constructor de la clase Usuario
     * 
     * @param String $codUsuario Codigo del usuario
     * @param String $password Password del usuario
     * @param String $descUsuario Descripcion del usuario
     * @param int $numConexiones Numero de conexiones del usuario
     * @param int $fechaHoraUltimaConexion Fecha y hora de la ultima conexion del usuario
     * @param int $fechaHoraUltimaConexionAnterior Anterior del usuario
     * @param String $imagenUsuario Imagen del usuario
     * @param String $perfil Tipo de perfil del usuario
     */
    function __construct($codUsuario,$password,$descUsuario,$numConexiones,$fechaHoraUltimaConexion,$fechaHoraUltimaConexionAnterior,$imagenUsuario,$perfil) {
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->numConexiones = $numConexiones;
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
        $this->imagenUsuario = $imagenUsuario;
        $this->perfil = $perfil;
    }
    
    /**
     * Metodo getCodUsuario()
     * 
     * Metodo get que devuelve el codigo del usuario
     * 
     * @return string codigo del usuario 
     */
    function getCodUsuario(){
        return $this->codUsuario;
    }
    /**
     * Metodo getPassword()
     * 
     * Metodo get que devuelve la password del usuario
     * 
     * @return String password del usuario
     */
    function getPassword() {
        return $this->password;
    }
    /**
     * Metodo getDescUsuario()
     * 
     * Metodo get que devuelve la descripcion del usuario
     * 
     * @return String descripcion del usuario
     */
    function getDescUsuario() {
        return $this->descUsuario;
    }
    /**
     * Metodo getNumConexiones()
     * 
     * Metodo get que devuelve el numero de conexiones del usuario
     * 
     * @return int conexiones del usuario
     */
    function getNumConexiones() {
        return $this->numConexiones;
    }
    /**
     * Metodo getFechaHoraUltimaConexion()
     * 
     * Metodo get que devuelve la fecha y hora de la ultima conexion del usuario
     * 
     * @return int fecha y hora de la ultima conexion del usuario
     */
    function getFechaHoraUltimaConexion() {
        return $this->fechaHoraUltimaConexion;
    }
    /**
     * Metodo getFechaHoraUltimaConexionAnterior()
     * 
     * Metodo get que devuelve la fecha y hora de la ultima conexion anterior del usuario
     * 
     * @return int fecha y hora de la ultima conexion anterior del usuario
     */
    function getFechaHoraUltimaConexionAnterior() {
        return $this->fechaHoraUltimaConexionAnterior;
    }
    /**
     * Metodo getImagenUsuario()
     * 
     * Metodo get que devuelve la imagen del usuario
     * 
     * @return String imagen del usuario
     */
    function getImagenUsuario(){
        return $this->imagenUsuario;
    }
    /**
     * Metodo getPerfil()
     * 
     * Metodo get que devuelve el perfil del usuario
     * 
     * @return String perfil del usuario
     */
    function getPerfil() {
        return $this->perfil;
    }
    
    /**
     * Metodo setCodUsuario()
     * 
     * Metodo set que cambia el valor del atributo $codUsuario
     * 
     * @param String $codUsuario Nuevo codigo del usuario
     */
    function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }
    /**
     * Metodo setPassword()
     * 
     * Metodo set que cambia el valor del atributo $password
     * 
     * @param String $password Nueva passsword del usuario
     */
    function setPassword($password) {
        $this->password = $password;
    }
    /**
     * Metodo setDescUsuario()
     * 
     * Metodo set que cambia el valor del atributo $descUsuario
     * 
     * @param String $descUsuario Nueva descripcion del usuario
     */
    function setDescUsuario($descUsuario) {
        $this->descUsuario = $descUsuario;
    }
    /**
     * Metodo setNumConexiones()
     * 
     * Metodo set que cambia el valor del atributo $numConexiones
     * 
     * @param int $numConexiones Nuevo numero de conexiones del usuario
     */
    function setNumConexiones($numConexiones) {
        $this->numConexiones = $numConexiones;
    }
    /**
     * Metodo setFechaHoraUltimaConexion()
     * 
     * Metodo set que cambia el valor del atributo $fechaHoraUltimaConexion
     * 
     * @param int $fechaHoraUltimaConexion Nueva ultima conexion del usuario
     */
    function setFechaHoraUltimaConexion($fechaHoraUltimaConexion) {
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
    }
    /**
     * Metodo setFechaHoraUltimaConexionAnterior()
     * 
     * Metodo set que cambia el valor del atributo $fechaHoraUltimaConexionAnterior
     * 
     * @param int $fechaHoraUltimaConexionAnterior Nueva ultima conexion anterior del usuario
     */
    function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior) {
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
    }
    /**
     * Metodo imagenUsuario()
     * 
     * Metodo set que cambia el valor del atributo $imagenUsuario
     * 
     * @param String $imagenUsuario Nueva imagen del usuario
     */
    function imagenUsuario($imagenUsuario){
        $this->imagenUsuario = $imagenUsuario;
    }
    /**
     * Metodo setPerfil()
     * 
     * Metodo set que cambia el valor del atributo $perfil
     * 
     * @param String $perfil Nuevo perfil del usuario
     */
    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
}
?>