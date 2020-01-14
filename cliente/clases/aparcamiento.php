<?php 
class Aparcamiento extends Emplazamiento{
    
    public $nplazas;
    
    public function __construct($nplazas) {
        parent::__construct($nombre, $lat, $long, $alt);
        $this->nplazas=$nplazas;
    }
    
    public function getPlazas() {
        return $this->nplazas;
    }

    public function setPlazas($nplazas) {
        $this->nplazas = $nplazas;
    }

    
    public function muestraValores() {
        $nombre = ['nombre'];
        $lat = ['lat'];
        $long = ['long'];
        $alt = ['alt']; 
        $nplazas = ['nplazas'];
        
        print ("<p id='nombre'><strong>Nombre: $nombre.</strong></p>\n");
        print ("<p id='lat'><strong>Latitud: $lat.</strong></p>\n");
        print ("<p id='long'><strong>Longitud: $long.</strong></p>\n");
        print ("<p id='alt'><strong>Altura: $alt.</strong></p>\n");
        print ("<p id='nplazas'><strong>Parque con $nplazas plazas de aparcamiento.</strong></p>\n");       
    }

}