<?php
include_once 'Personaje.php';
//Clase derivada 
class Guerrero extends Personaje{
   //Atributos - Variables Instancias
   private int $fuerza;
   private int $armadura;
   public function __construct(int $id, string $nombre, int $nivel, int $puntoVida, int $energia, int $duelosGanados, int $duelosPerdidos, string $estado, Arma $arma, int $fuerza, int $armadura){
      parent::__construct($id,$nombre,$nivel,$puntoVida,$energia);
        $this->fuerza = $fuerza;
        $this->armadura = $armadura;
   } 
   //Metodo Getters
   public function getFuerza():int{
    return $this->fuerza;
   } 
   public function getArmadura():int{
    return $this->armadura;
   } 
   //Metodo Setters
   public function setFuerza($nuevaFuerza):void{
    $this->fuerza = $nuevaFuerza;
   } 
   public function setArmadura($nuevaArmadura):void{
    $this->armadura = $nuevaArmadura;
   } 
   //Metodos a Realizar
   public function calcularPoderBase():int{
    return $this->getNivel() * 15; 
   } 
   public function calcularPoderEspecial(): int{
    return ($this->getFuerza() * 2) + $this->getArmadura();
   } 

} 
?>