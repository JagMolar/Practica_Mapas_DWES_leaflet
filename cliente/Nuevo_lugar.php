<!doctype html>
<html lang="es">
    <head>
      <meta charset="UTF-8"> 
      <title>Principal</title>
      <link href="../assets/estilos/estilos.css" rel="stylesheet" type="text/css"/>
      <script src="../assets/validacion.js" type="text/javascript"></script>
      <script src="https://code.jquery.com/jquery-3.4.0.slim.js"/></script>
    </head>
    <body>
        <div id="container">
            <header id="header">
                <div id="logo">
                    <h1>Nuevo lugar</h1>
                    <img src="../assets/img/imagenMapa.jpg" alt="Mapa Logo"/>
                </div>
            </header>
            <div id="form">
                <form action="EnviarNuevoLugar.php" method="post">
                    <fieldset id="fieldset">   
                        
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" size="4" title="Mínimo 4 caracteres ." pattern="[a-zA-Z/\s,.'-/\d]{4,20}" required="" />

                    <label for="lat">Latitud</label>
                    <input type="number" id="lat" name="lat" step="any" min="-90" max="90" title="Número comprendido entre -90 y 90 m." required="" />
                    
                    <label for="long">Longitud</label>
                    <input type="number" step="any" id="long" name="long" min="-180" max="180" title="Número comprendido entre -180 y 180 m." required="" />
                    
                    <label for="alt">Altitud</label>
                    <input type="number" id="alt" name="alt" min="0" max="4000" title="Número comprendido entre 0 y 4000 m." required="" />

                    <label for="tipo">Tipo</label>
                    <select id="tipo"  name="tipo" onchange="validarTipo();">
                        <option id="null" value="0">--</option>
                        <option id="parque" value="1">Parque</option>
                        <option id="jardin" value="2">Jardín</option>
                    </select>
                                        
                    <label id="lplazas" for="nplazas">Número de plazas de aparcamiento</label>
                    <input type="number" id="nplazas" name="nplazas" value="0">
                    
                    <label id="lmesas" for="nmesas">Número de mesas</label>
                    <input type="number" id="nmesas" name="nmesas" value="0">
                    
                    <p id="mensajeError"></p>
                    
                    </fieldset>
                    
                    <input type="submit" id="enviar" name="enviar" value="Enviar formulario">
                    
                </form>
            </div>
            
        </div>
    </body>
</html>