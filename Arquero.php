<?php
include_once 'Personaje.php';
//Clase derivada
class Arquero extends Personaje{
    //Atributos - Variables Instancias
    private int $precision;
    private int $velocidad;
    //Metodo constructor
    public function __construct(int $id, string $nombre, int $nivel, int $puntoVida, int $energia, int $duelosGanados, int $duelosPerdidos, string $estado, Arma $arma, int $precision, int $velocidad){
        parent::__construct($id,$nombre,$nivel,$puntoVida,$energia);
        $this->precision = $precision;
        $this->velocidad = $velocidad;
    } 
    //Metodos Getters
    public function getPrecision():int{
        return $this->precision;
    } 
    public function getVelocidad():int{
        return $this->velocidad;
    } 
    //Metodos Setters
    public function setPrecision($nuevaPrecision):void{
        $this->precision = $nuevaPrecision;
    } 
    public function setVelocidad($nuevaVelocidad):void{
        $this->velocidad = $nuevaVelocidad;
    } 
    //Aplicamos los metodos abstractos
    public function calcularPoderBase(): int{
        return ($this->getNivel() * 12) + $this->getPrecision();
    } 
    public function calcularPoderEspecial(): int{
        return ($this->getPrecision() * 2) + $this->getVelocidad();
    } 
} 
?>