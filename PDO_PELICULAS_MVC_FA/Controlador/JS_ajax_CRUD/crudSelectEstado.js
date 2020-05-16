function mostrarEstado(){
	$.ajax({
		type:"POST",
		// URL DE LA TABLA
		url:"../../Vista/Usuario/select/selectEstado.php",
		// r es la tabla
		success:function(r){
			
			// MOSTRAR TABLA EN EL DIV CON ESE ID
			$('#selectDatos').html(r)
		}
	});
}


function obtenerDatos(id_estado_PK){}




function eliminarDatos(id_estado_PK){
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