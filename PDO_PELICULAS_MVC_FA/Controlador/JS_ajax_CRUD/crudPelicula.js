function mostrar(){
	$.ajax({
		type:"POST",
		// URL DE LA TABLA
		url:"../../Modelo/Procesos/mostrarPelicula.php",
		// r es la tabla
		success:function(r){
			
			// MOSTRAR TABLA EN EL DIV CON ESE ID
			$('#tablaDatos').html(r)
		}
	});
}


function obtenerDatos(id_pelicula_PK){}




function eliminarDatos(id_pelicula_PK){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "¡Una vez eliminado no podra recuperarse!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			
		} 
	});
}