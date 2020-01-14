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
                    <h1>Mis lugares</h1>
                    <img src="../assets/img/imagenMapa.jpg" alt="Mapa Logo"/>
                </div>
            </header>
            <div id="mapa">  
                <!-- AQUÍ SE INSERTA EL MAPA DESDE EL ARCHIVO miMapaLugares.js -->
            </div>
            <div id="datos_mapa">
                <!-- LLAMAMOS AL CLIENTEWEB DONDE ESTÁ LA FUNCIÓN PARA DEVOLVER UN LUGAR ALEATORIO -->
                <?php  
                $cliente = new SoapClient("http://localhost/practica_2/servidor/obtenerLugares.wsdl");
                $nuevolugaraleatorio=$cliente->returnlugaraleatorio();
               
                echo '<h2>Estos son mis lugares preferidos:</h2>';
                

                $nuevolugaraleatorio = unserialize($nuevolugaraleatorio);

                $nombre = $nuevolugaraleatorio['nombre'];
                $lat = $nuevolugaraleatorio['lat'];
                $long = $nuevolugaraleatorio['longi'];
                $alt = $nuevolugaraleatorio['alt']; 
                $tipo = $nuevolugaraleatorio['tipo'];
                $plazas = $nuevolugaraleatorio['nplazas'];
                $mesas = $nuevolugaraleatorio['nmesas'];

      
                ?>
                <p>Nombre: <span id="nombre"><?=$nombre?></span>.</p>
                <p>Latitud: <span  id="lat"><?=$lat?></span>.</p>
                <p>Longitud: <span id="long"><?=$long?></span>.</p>
                <p>Altura: <span id="alt"><?=$alt?></span>.</p>
                
                
                <?php              
                if($tipo === '1'){
                    ?>
                <p>Parque con <?=$plazas?> plazas de aparcamiento.</p>
               <?php
                        }
                        if($tipo === '2'){
                            ?>
                <p>Jardin con <?=$mesas?> mesas.</p>
               <?php
                        }
                ?>
            </div>
            <div id="crear">
                <form action="Nuevo_lugar.php" method="post">
                    <input type="submit" value="Crear nuevo lugar">
                </form>
                
            </div>
            
        </div>
    </body>
</html>


