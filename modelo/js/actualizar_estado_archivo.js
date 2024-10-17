function validar() {
	var ubicacion_archivo,estante_archivo,fila_archivo,columna_archivo;
	ubicacion_archivo = document.getElementById("ubicacion_archivo").value;
	estante_archivo = document.getElementById("estante_archivo").value;
	fila_archivo = document.getElementById("fila_archivo").value;
	columna_archivo = document.getElementById("columna_archivo").value;
	
	if (ubicacion_archivo === "" || estante_archivo === "" || fila_archivo === "" || columna_archivo === "" ) {
		alert("Todos Los Campos Son Obligatorios");
		return false;
	}		
}