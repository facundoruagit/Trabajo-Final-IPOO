<?php
include_once 'Personaje.php';

class Arma{
    //Atributos - Variables Instancias
    private int $id;
    private string $nombre;
    private string $tipo;
    private int $danioBase;
    private int $nivelMinimo;
    private string $estado;
    //Metodo Constructor
    public function __construct(int $id, string $nombre, string $tipo, int $danioBase, int $nivelMinimo, string $estado = "disponible"){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->danioBase = $danioBase;
        $this->nivelMinimo = $nivelMinimo;
        //Validacion para que solo se guarde un estado permitido
        $this->setEstado($estado);
    } 
    //Metodos Getters
    public function getId():int{
        return $this->id;
    } 
    public function getNombre():string{
        return $this->nombre;
    } 
    public function getTipo():string{
        return $this->tipo;
    } 
    public function getDanioBase():int{
        return $this->danioBase;
    } 
    public function getNivelMinimo():int{
        return $this->nivelMinimo;
    } 
    public function getEstado():string{
        return $this->estado;
    }
    //Metodos Setters
    public function setId($nuevoId):void{
        $this->id = $nuevoId;
    }  
    public function setNombre($nuevoNombre):void{
        $this->nombre = $nuevoNombre;
    } 
    public function setTipo($nuevoTipo):void{
        $this->tipo = $nuevoTipo;
    } 
    public function setDanioBase($nuevoDanioBase):void{
        $this->danioBase = $nuevoDanioBase;
    } 
    public function setNivelMinimo($nuevoNivelMinimo):void{
        $this->nivelMinimo = $nuevoNivelMinimo;
    } 
    //Setter especial : solo permite los valores indicados en el enunciado
    public function setEstado(string $estado):void{
        $estadosValidos = ["disponible", "equipada","rota"];
        if (in_array($estado,$estadosValidos)){
            $this->getEstado() = $estado;
        }   
    } 
    //Metodos a desarollar
    public function calcularDanio():int {
        return $this->getDanioBase();
    } 
    /**Verifica si un personaje puede equipar un arma - Comparamos el nivel del personaje con el nivel minimo del arma
     * Un arma rota no puede equiparse - un arma equipada no puede asignarse a otro personaje */ 

    public function puedeSerEquipadaPor(Personaje $personaje):bool{
        if($this->getEstado() !== "disponible"){
            return false;
        } elseif($personaje->getNivel() >= $this->getNivelMinimo()){
            return true;
        }  
    } 

} 

?>