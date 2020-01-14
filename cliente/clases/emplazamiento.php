<?php 

abstract class Emplazamiento{
    public $nombre; 
    public $lat;
    public $long;
    public $alt; 
     
   
    function __construct($nombre, $lat, $long, $alt) {
        $this->nombre = $nombre;
        $this->latitud = $lat;
        $this->longitud = $long;
        $this->altitud = $alt;
         
    }

    public function getLatitud() {
        return $this->latitud;
    }

    public function getLongitud() {
        return $this->longitud;
    }

    public function getAltitud() {
        return $this->altitud;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setLatitud($lat) {
        $this->latitud = $lat;
    }

    public function setLongitud($long) {
        $this->longitud = $long;
    }

    public function setAltitud($alt) {
        $this->altitud = $alt;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
     
     
    abstract public function muestraValores();
}