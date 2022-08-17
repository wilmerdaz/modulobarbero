<?php
class RegistroUsu{
    private $cedula;
    private $nombre;
    private $apellido;
    private $num_celular;
    private $f_nacimiento;
    private $email;
    private $contrasena;
    

    public function __construct($cedula,$nombre,$apellido,$num_celular,$f_nacimiento,$email,$contrasena){  
        
        $this->cedula       = $cedula;
        $this->nombre       = $nombre;
        $this->apellido     = $apellido;
        $this->num_celular  = $num_celular;
        $this->f_nacimiento = $f_nacimiento;
        $this->email        = $email;
        $this->contrasena   = $contrasena;  
    }
    
    // LAS FUNCIONES TIPO GET SON PARA MOSTRAR LOS DATOS EN EL MODEL DAO
    
    public function getCedula(){
        return $this -> cedula;
    }
    public function getNombre(){
        return $this -> nombre;
    }
    public function getApellido(){
        return $this -> apellido;
    }
    public function getNum_celular(){
        return $this -> num_celular;
    }
    public function getF_nacimiento(){
        return $this -> f_nacimiento;
    }
    public function getEmail(){
        return $this -> email;
    }
    public function getContrasena(){
       return $this -> contrasena;
    }

    // LAS FUNCIONES TIPO SET SON PARA CAPTURAR DATOS DEL CONTROLADOR 
    public function setCedula($cedula){
        $this -> cedula = $cedula;
    }
    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }
    public function setApellido($apellido){
        $this -> apellido = $apellido;
    }
    public function setNum_celular($num_celular){
        $this -> num_celular = $num_celular;
    }
    public function setF_nacimiento($f_nacimiento){
        $this -> f_nacimiento = $f_nacimiento;
    }
    public function setEmail($email){
        $this -> email = $email;
    }
    public function setContrasena($contrasena){
        $this -> contrasena = $contrasena;
    }
    



}




?>