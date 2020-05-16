<?php 

require_once '../ModeloVO/crudGenerico.php';
// TRAEMOS LOS DATOS
class crudPelicula extends crudGenerico{

 public function mostrarDatos(){

 	$sql ="SELECT * FROM mostrarPelicula";

        // RESOLUCIÓN DE AMBITO
        $query = Conexion::conectar()->prepare($sql);
        $query->execute(); 
        return $query->fetchAll();
        $query->close();
        
 }

 public function insertarDatos(){


 }
 public function actualizarDatos(){


 }
 public function eliminarDatos(){


 }


}


 ?>