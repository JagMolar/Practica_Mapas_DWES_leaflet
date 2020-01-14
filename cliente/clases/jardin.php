<?php 


class Jardin extends Emplazamiento{
    public $nmesas;
    
    public function __construct($nmesas) {
        parent::__construct($nombre, $lat, $long, $alt);
        $this->nmesas = $nmesas;
    }
    
    public function getMesas() {
        return $this->nmesas;
    }

    public function setMesas($nmesas) {
        $this->nmesas = $nmesas;
    }

    public function muestraValores() {
        $nombre = ['nombre'];
        $lat = ['lat'];
        $long = ['long'];
        $alt = ['alt']; 
        $nmesas = ['nmesas'];
        
        print ("<p id='nombre'><strong>Nombre: $nombre.</strong></p>\n");
        print ("<p id='lat'><strong>Latitud: $lat.</strong></p>\n");
        print ("<p id='long'><strong>Longitud: $long.</strong></p>\n");
        print ("<p id='alt'><strong>Altura: $alt.</strong></p>\n");
        print ("<p id='nmesas'><strong>Jardín con $nmesas mesas.</strong></p>\n");   
    }
}