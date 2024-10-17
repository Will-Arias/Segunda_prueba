function validar() {
	var documento_empleado_prestamo,documento_usuario_prestamo,ubicacion_prestamo;
	documento_empleado_prestamo = document.getElementById("documento_empleado_prestamo").value;
	documento_usuario_prestamo = document.getElementById("documento_usuario_prestamo").value;
	ubicacion_prestamo = document.getElementById("ubicacion_prestamo").value;

	if (documento_empleado_prestamo === "" || documento_usuario_prestamo === "" || ubicacion_prestamo === "" ) {
		alert("Todos los campos son obligatorios");
		return false;
	}
	else if (documento_empleado_prestamo.length>10) {
		alert("El Documento Del Empleado Tiene Que Ser 9 o 10 Digitos");
		return false;
	}
	else if (documento_usuario_prestamo.length>10) {
		alert("El Documento Del Usuario Tiene Que Ser 9 o 10 Digitos");
		return false;
	}
}