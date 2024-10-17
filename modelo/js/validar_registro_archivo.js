function validar() {
	var documento_usuario,nombre_usuario,apellido_usuario,sala_archivo,ubicacion_archivo,estante_archivo,fila_archivo,columna_archivo;
	documento_usuario = document.getElementById("documento_usuario").value;
	nombre_usuario = document.getElementById("nombre_usuario").value;
	apellido_usuario = document.getElementById("apellido_usuario").value;
	sala_archivo = document.getElementById("sala_archivo").selectedIndex;
	ubicacion_archivo = document.getElementById("ubicacion_archivo").value;
	estante_archivo = document.getElementById("estante_archivo").value;
	fila_archivo = document.getElementById("fila_archivo").value;
	columna_archivo = document.getElementById("columna_archivo").value;
	
	if (documento_usuario === "" || nombre_usuario === "" || apellido_usuario === "" || ubicacion_archivo === "" || estante_archivo === "" || fila_archivo === "" || columna_archivo === "" ) {
		alert("Todos Los Campos Son Obligatorios");
		return false;
	}
	else if (documento_usuario.length>10) {
		alert("El Documento Tiene Que Tener 10 Digitos");
		return false;
	}
	else if (sala_archivo == null || sala_archivo == 0) {
		alert("Seleccione Una Opcion De La Lista Desplegable");
		return false;
	}		
}