<?php 

require '../../../Modelo/Proveedor_Conexion/Conexion.php';
require '../../../Modelo/ModeloVO/crudGenerico.php';
require '../../../Modelo/ModeloDAO/crudUsuario.php';



$obj = new crudUsuario();

$datos = $obj->mostrarDatos();

// ordenArray($datos);



$datosSelect = "<select name=''> 
<option selected>Seleccione</option> ";

    foreach ($datos as $key => $value) {
	 
	    $datosSelect .= '
	                   <option>'. $value['nombre_estado'] .'</option>';
     }
     
$datosSelect .= '</select>';
echo $datosSelect;



// function ordenArray($array){

// 	echo "<pre>";
// 	echo var_dump($array);
// 	echo "</pre>";

// }

 ?>