<?php 

require_once '../ModeloDAO/crudUsuario.php';

$obj = new crudUsuario();

$datos = $obj->mostrarDatos();

// $datos=Crud::mostrarDatos();

$tabla = '<table class="table table-dark">
			<thead>
				<tr class="font-weight-bold">
					<td>Estado</td>
					<td>Nombre</td>
					<td>Correo electrónico</td>
					<td>Contraseña</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>
			</thead>
			<tbody>';

$datosTabla="";

foreach ($datos as $key => $value) {

 $datosTabla = $datosTabla . '<tr>
								<td>'. $value['nombre_estado'] .'</td>
								<td>'. $value['nombre_usuario'] .'</td>
								<td>'. $value['correo'] .'</td>
								<td>'. $value['clave'] .'</td>
								<td>
									<span class="btn btn-warning btn-sm" onclick="obtenerDatos('. $value['id_usuario_PK'] .')" data-toggle="modal" data-target="#actualizarModal">
										<i class="fas fa-edit"></i>
									</span>
									
								</td>
								<td>
									<span class="btn btn-danger btn-sm" onclick="eliminarDatos('. $value['id_usuario_PK'] .')">
										<li class="fas fa-trash-alt"></li>
									</span>
								</td>
							</tr>';

}

echo $tabla.$datosTabla.'</tbody></table>';








 ?>