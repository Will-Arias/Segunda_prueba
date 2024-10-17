function validar() {
	var documento_empleado;
	documento_empleado = document.getElementById("documento_empleado").value;

	if (documento_empleado.length>10) {
		alert("El Documento Tiene Que Ser 10 Digitos");
		return false;
	}
}