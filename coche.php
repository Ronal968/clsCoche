<?php
class clsCoche{
    //atributos de la clase coche
    private $modelo="";
    private $color="";
    private $placa="";
    private $marca="";   
    //Construtor de la clase coche
public function __construct($mo,$co,$pl,$ma){
    $this->modelo=$mo;
    $this->color=$co;
    $this->placa=$pl;
    $this->marca=$ma;
    }
    //get obtener el valor del atributo modelo
    public function getModelo(){
        return $this->modelo;
    }
    //obtener el valor del atributo color
    public function getColor(){
        return $this->color;
    }
    //obtener el valor del atributo placa
    public function getPlaca(){
        return $this->placa;
    }
    //obtener el valor del atributo marca
    public function getMarca(){
        return $this->marca;
    }
    //set metodos que nos permiten asignar valores a los atributos
    public function setModelo($mo){
        $this->modelo=$mo;
    }
    public function setColor($co){
        $this->color=$co;
    }
    public function setPlaca($pl){
        $this->placa=$pl;
    }
    public function setMarca($ma){
        $this->marca=$ma;
    }
}