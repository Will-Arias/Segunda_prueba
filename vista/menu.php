<!DOCTYPE html>
<html>
<head>
	<title>Arsama | Archivo Clinico</title>
	<link rel="stylesheet" href="../modelo/css/estilo_menu.css">
	<link rel="stylesheet" href="../modelo/css/fontello.css">
	<link rel="shortcut icon" href="../modelo/img/icons/favicon.ico">
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
	<header>
		<img src="../modelo/img/arsama.png" style="height:90%; width:2%;  position: relative; top:3% ; left:-3% ;">
		<img src="../modelo/img/arsa.png" style="height:445%; width:25%;  position: relative; top:-75% ; left:-30% ;">
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu" class="icon-menu-1"></label>
		<nav class="menu">
			<ul>
				<li><a href="../controlador/inicio.php">Inicio</a></li>
				<li><a href="../controlador/prestamo.php">Prestamos</a></li>
				<li class="submenu"><a>Registrar<span class="icon-down-open"></span></a>
				<ul>
					<li><a href="../vista/registrar_archivo.php">Registrar Archivo</a></li>
					<li><a href="../vista/registrar_empleado.php">Registrar Empleado</a></li>
				</ul>
				</li>
				<li class="submenu"><a>Consultar<span class="icon-down-open"></span></a>
				<ul>
					<li><a href="../vista/consultar_archivo.php">Consultar Archivo</a></li>
					<li><a href="../vista/consultar_archivo_actinacti.php">Consultar Activos O Inactivos</a>
					
					<li><a href="../vista/macroconsulta.php">Macroconsulta</a></li>
					</li>
				</ul>
				</li>
				<li class="submenu"><a>Reportes<span class="icon-down-open"></span></a>
				<ul>
					<li><a href="../vista/archivo_reporte_prestamo.php">Reporte de Prestamos</a></li>
					<li><a href="../vista/archivo_reporte_inactivo.php">Reporte de Inactivos</a></li>
					<li><a href="../vista/archivo_reporte_activo.php">Reporte de activos</a></li> 
					<li><a href="../vista/archivo_reporte_disponible.php">Reporte de disponible</a></li> 
				</ul>
				</li>
				
				<li><a href="../index.html">Salir</a></li>
			</ul>
		</nav>
	</header>
	<script src="../modelo/js/menu.js"></script>
</body>
</html>