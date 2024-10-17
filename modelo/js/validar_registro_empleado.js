function validar() {
	var documento_empleado,nombre_empleado,apellido_empleado,cargo_empleado,estado_empleado,contrasena_empleado;
	documento_empleado = document.getElementById("documento_empleado").value;
	nombre_empleado = document.getElementById("nombre_empleado").value;
	apellido_empleado = document.getElementById("apellido_empleado").value;
	cargo_empleado = document.getElementById("cargo_empleado").selectedIndex;
	estado_empleado = document.getElementById("estado_empleado").selectedIndex;
	contrasena_empleado = document.getElementById("contrasena_empleado").value;

	if (documento_empleado === "" || nombre_empleado === "" || apellido_empleado === "" || contrasena_empleado === "" ) {
		alert("Todos Los Campos Son Obligatorios");
		return false;
	}
	else if (documento_empleado.length>10) {
		alert("El Documento Tiene Que Ser 10 Digitos");
		return false;
	}
	else if (estado_empleado == null || estado_empleado == 0) {
		alert("Seleccione Una Opcion De La Lista Desplegable");
		return false;
	}
	else if (cargo_empleado == null || cargo_empleado == 0) {
		alert("Seleccione Una Opcion De La Lista Desplegable");
		return false;
	}
}