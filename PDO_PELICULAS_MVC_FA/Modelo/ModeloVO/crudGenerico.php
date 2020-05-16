<?php


abstract class crudGenerico extends Conexion{

     abstract public function mostrarDatos();
     abstract public function insertarDatos();
     abstract public function actualizarDatos();
     abstract public function eliminarDatos();

}


?>