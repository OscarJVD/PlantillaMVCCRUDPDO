<?php



// TRAEMOS LOS DATOS
class crudUsuario extends crudGenerico{

    public function mostrarDatos(){

        $sql ="SELECT * FROM mostrarUsuario";

        // RESOLUCIÓN DE AMBITO
        $query = Conexion::conectar()->prepare($sql);
        $query->execute(); 
        return $query->fetchAll();
        $query->close();

     }

    public function insertarDatos(){}

    public function actualizarDatos(){}

    public function eliminarDatos(){}
}


?>