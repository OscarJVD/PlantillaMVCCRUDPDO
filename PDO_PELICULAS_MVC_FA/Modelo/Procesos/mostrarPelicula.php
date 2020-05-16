<?php 

require_once '../ModeloDAO/crudPelicula.php';

$obj = new crudPelicula();

$datos = $obj->mostrarDatos();

$tabla = '<table class="table table-dark">
			<thead>
				<tr class="font-weight-bold">
					<td>Usuario</td>
					<td>Nombre</td>
					<td>Descripción</td>
					<td>Categoria</td>
					<td>Estado</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>
			</thead>
			<tbody>';

$datosTabla="";

foreach ($datos as $key => $value) {
	
 $datosTabla=$datosTabla.'<tr>
							<td>'. $value['nombre_usuario'] .'</td>
							<td>'. $value['nombre_pelicula'] .'</td>
							<td>'. $value['descripcion'] .'</td>
							<td>'. $value['nombre_categoria'] .'</td>
							<td>'. $value['nombre_estado'] .'</td>
							<td>
								<span class="btn btn-warning btn-sm" onclick="obtenerDatos('. $value['id_pelicula_PK'] .')" data-toggle="modal" data-target="#actualizarModal">
									<i class="fas fa-edit"></i>
								</span>
								
							</td>
							<td>
								<span class="btn btn-danger btn-sm" onclick="eliminarDatos('. $value['id_pelicula_PK'] .')">
									<li class="fas fa-trash-alt"></li>
								</span>
							</td>
						</tr>';
}

echo $tabla.$datosTabla.'</tbody></table>';




 ?>