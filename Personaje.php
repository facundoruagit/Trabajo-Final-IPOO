<?php
/**Crear una clase abstracta denominada Personaje. */
abstract class Personaje{
    //Atributos - Variables Instancias
    protected int $id;
    protected string $nombre;
    protected int $nivel;
    protected int $puntoVida;
    protected int $energia;
    protected int $duelosGanados;
    protected int $duelosPerdidos;
    protected string $estado; // Valores: disponible-lesionado-retirado
    protected Arma $arma;
    //Metodo constructor
    public function __construct(int $id, string $nombre, int $nivel, int $puntoVida, int $energia, int $duelosGanados = 0, int $duelosPerdidos = 0, string $estado="disponible", Arma $arma = null){
         $this->id = $id;
         $this->nombre = $nombre;
         $this->nivel = $nivel;
         $this->puntoVida = $puntoVida;
         $this->energia = $energia;
         $this->duelosGanados = $duelosGanados;
         $this->duelosPerdidos = $duelosPerdidos;
         $this->estado = $estado;
         $this->arma = $arma;
    } 
    //Metodos Getters
    public function getId():int{
        return $this->id;
    }  
    public function getNombre():string{
        return $this->nombre;
    } 
    public function getNivel():int{
        return $this->nivel;
    } 
    public function getPuntoVida():int{
        return $this->puntoVida;
    } 
    public function getEnergia():int{
        return $this->energia;
    } 
    public function getDuelosGanados():int{
        return $this->duelosGanados;
    } 
    public function getDuelosPerdidos():int{
        return $this->duelosPerdidos;
    } 
    public function getEstado():string{
        return $this->estado;
    } 
    public function getArma():Arma{
        return $this->arma;
    }  
    //Metodos Setters
    public function setId($nuevoId):void{
        $this->id = $nuevoId;
    } 
    public function setNombre($nuevoNombre):void{
        $this->nombre = $nuevoNombre;
    } 
    public function setNivel($nuevoNivel):void{
        $this->nivel = $nuevoNivel;
    }
    public function setPuntoVida($nuevoPuntoVida):void{
        $this->puntoVida = $nuevoPuntoVida;
    }  
    public function setEnergia($nuevaEnergia):void{
        $this->energia = $nuevaEnergia;
    } 
    public function setDuelosGanados($nuevosDuelosGanados):void{
        $this->duelosGanados = $nuevosDuelosGanados;
    } 
    public function setDuelosPerdidos($nuevosDuelosPerdidos):void{
        $this->duelosPerdidos = $nuevosDuelosPerdidos;
    } 
    public function setEstado($nuevoEstado):void{
        $this->estado = $nuevoEstado;
    } 
    public function setArma(Arma $arma){
        $this->arma = $arma;
    } 
    //Metodos a trabajar
    public function recibirDanio($cantidad):void{
        $vidaActual = $this->getPuntoVida();
        $nuevaVida = $vidaActual - $cantidad;
        if ($nuevaVida < 0){
            $nuevaVida = 0;
        } 
        $this->setPuntoVida($nuevaVida);
    } 

    public function recuperarVida($cantidad):void{
       $vidaActual = $this->getPuntoVida();
       $nuevaVida = $vidaActual + $cantidad;
       $this->setPuntoVida($nuevaVida);
    } 

    public function recuperarEnergia($cantidad):void{
        $energiaActual = $this->getEnergia();
        $nuevaEnergia = $energiaActual + $cantidad;
        $this->setEnergia($nuevaEnergia);
    } 
    
    public function puedeDuelar():bool{
        $estadoActual = $this->getEstado();
        if ($estadoActual === "lesionado" || $estadoActual === "retirado"){
            return false;
        } 
        return true;
    } 

    public function calcularPoderTotal():int{
         return $this->calcularPoderBase() + $this->calcularPoderEspecial();
    } 
    //Metodos Abstractos
    abstract public function calcularPoderBase():int;
    abstract public function calcularPoderEspecial():int;
    
} 
?>