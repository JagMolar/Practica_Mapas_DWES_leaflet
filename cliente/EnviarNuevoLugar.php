<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Principal</title>
        <link href="../assets/estilos/estilos.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" 
        integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
        crossorigin="" />
       <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" accesskey=""
       integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
       async=""crossorigin="">
       </script>
       <script src="../assets/leaflet/leaflet-src.js" type="text/javascript"></script>
       <script src="https://code.jquery.com/jquery-3.4.0.slim.js"/></script>
       <script src="../assets/miMapaLugares.js"></script>      
    </head>
    <body>
        <div id="container">
            <header id="header">
                <div id="logo">
                    <h1>Nuevo Lugar</h1>
                    <img src="../assets/img/imagenMapa.jpg" alt="Mapa Logo"/>
                </div>
            </header>
            
<?php


if(!isset($_POST['enviar'])){
    header("Location:Principal.php");die();
}else{

  try{
//      echo '<br>entra1';
        //Iniciamos cliente soap
        $cliente = new SoapClient("http://localhost/practica_2/servidor/Servidorservicio.php?wsdl"); 
//        echo '<br>entra2';
        
        //Establecemos los parámetros
        if(!empty('nombre') && !empty('lat') &&!empty('long') && !empty('alt')){
//           echo '<br>entra3';
           $nombre = $_POST['nombre'];
           $lat = $_POST['lat'];
           $long= $_POST['long'];
           $alt = $_POST['alt']; 
           $tipo = $_POST['tipo'];
           $plazas = $_POST['nplazas'];
           $mesas = $_POST['nmesas'];

                if ($tipo == '1'){
                    $mesas = '0';            
                }
                if ($tipo == '2'){
                    $plazas = '0';
    
                }
                    //Insertamos los datos
//                $cliente-> nuevolugar('Nuevo lugar','90','90','234','1','0','0');
                $cliente->nuevolugar($nombre,$lat,$long,$alt,$tipo,$plazas,$mesas);
                ?>
            <div id="lugar">  
            <?php
               
                        print ("<p>Nombre: $nombre</p>\n");
                        print ("<p>Latitud: $lat</p>\n");
                        print ("<p>Longitud: $long</p>\n");
                        print ("<p>Altura: $alt</p>\n");
                        if($tipo === '1'){
                            print ("<p>Parque con $plazas plazas de aparcamiento.</p>\n");
                        }
                        if($tipo === '2'){
                            print ("<p>Jardín con $mesas mesas.</p>\n");
                        }
                    
                    print("<h1 id='nuevo'>Nuevo lugar añadido</h1>\n");
                    print("<br />");
                    print("<a id='nuevo_a' href='Principal.php'>Volver a página principal</a>");
                 
        }//fin if formulario
    } catch (SoapFault $ex){
            echo var_dump($ex);
    }
    
}
?>
   
            </div>
