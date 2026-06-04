<?php
include_once 'Personaje.php';
//Clase derivada
class Mago extends Personaje{
    //Atributos - Variables Instancias
    private int $mana;
    private int $inteligencia;
    //Metodo constructor
    public function __construct(int $id, string $nombre, int $nivel, int $puntoVida, int $energia, int $duelosGanados, int $duelosPerdidos, string $estado, Arma $arma, int $mana, int $inteligencia ){
       parent::__construct($id,$nombre,$nivel,$puntoVida,$energia);
       $this->mana = $mana;
       $this->inteligencia = $inteligencia;
    } 
    //Metodos Getters
    public function getMana():int{
       return $this->mana;
    } 
    public function getInteligencia():int{
        return $this->inteligencia;
    } 
    //Metodos Setters
    public function setMana($nuevoMana):void{
        $this->mana = $nuevoMana;
    } 
    public function setInteligencia($nuevoINteligencia):void{
        $this->inteligencia = $nuevoINteligencia;
    } 
    //Aplicamos los metodos abstractos 
    public function calcularPoderBase(): int{
        return ($this->getNivel() * 10) + $this->getMana();
    } 
    public function calcularPoderEspecial(): int{
        return ($this->getMana() + $this->getInteligencia()) * 3;
    } 

} 

?>