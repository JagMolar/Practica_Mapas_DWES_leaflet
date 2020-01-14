<?php 
class Lugares {
    public function returnlugaraleatorio(){
        $conexionBd = new PDO('mysql:host=localhost;dbname=lugares','user1','');
//      $stmt =  $conexionBd->prepare('SELECT  nombre FROM lugar order by rand() limit 1');
        $stmt =  $conexionBd->prepare('SELECT * FROM lugar ORDER BY rand() LIMIT 1');
        $stmt->execute();
//      return  $stmt->fetch()[0]; Hay que serializar el array para enviar como String
        return serialize($stmt->fetch());

    }
    
    public function nuevolugar($nombre,$lat,$long,$alt,$tipo,$plazas,$mesas){
        try{
            $conexionBd = new PDO('mysql:host=localhost;dbname=lugares','user1','');
            $conexionBd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//          $stmt =  $conexionBd->prepare('insert into lugar values ("asdf",1,2,3,4,5,6)');
            $stmt =  $conexionBd->prepare("INSERT INTO lugar VALUES ('$nombre',$lat,$long,$alt,$tipo,$plazas,$mesas)");
            $stmt->execute();
        }catch (PDOException $e){
            die("Error " . $e->getMessage());
        }  
    }
}