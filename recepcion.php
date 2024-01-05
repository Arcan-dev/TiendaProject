<!------------------------------------------------
Trabajo [1]

Conceptos de Desarrollo de Software
Trabajo Práctico Integrador Entregable
HTML & PHP

Cantidad de documentos: 2 (index.html & recepcion.php)
Software utilizado: Sublime Text, Firefox, XAMPP Apache

Fecha de inicio: 09/06/2022
Última actualización: 21/06/2022
-------------------------------------------------->

<?php 
	
	// Fecha
	if (isset($_POST["fecha"])) {	// Si se definió la fecha,
		$fecha = $_POST["fecha"];	// Asignarla a la variable $fecha;
	}	

	// Nombre
	if (isset($_POST["nombre"])) {	// Si se definió el nombre de la persona,
		$nombre = $_POST["nombre"]; // Asignarlo a la variable $nombre;
	}

	// Impuesto
	if (isset($_POST["impuesto"])){						// Si se definió el impuesto,
		$impuesto_seleccionado = $_POST["impuesto"];	// Asignarlo a la variable $impuesto_seleccionado;
	}


	// Item 1

	if (isset($_POST["codigo_item1"])) { 		 // Si se definió el código del item 1;
		$codigo_item1 = $_POST["codigo_item1"]; // Asignarlo a la variable $codigo_item1;
	}

	if (isset($_POST["descripcion_item1"])){			   // Si se definió la descripción del item 1;
		$descripcion_item1 = $_POST["descripcion_item1"]; // Asignarla a la variable $descripcion_item1;
	}

	if (isset($_POST["cantidad_item1"])){			 // Si se definió la cantidad del item 1;
		$cantidad_item1 = $_POST["cantidad_item1"];	// Asignarla a la variable $cantidad_item1;
		$cantidad_item1 = (int)$cantidad_item1;    // (int) convierte el valor en un integer.
	}

	if (isset($_POST["precio_item1"])){			 // Si se definió el precio del item 1;
		$precio_item1 = $_POST["precio_item1"];	// Asignarlo a la variable $precio_item1;
		$precio_item1 = (int)$precio_item1;    // (int) convierte el valor en un integer.
	}

	
	// Item 2

	if (isset($_POST["codigo_item2"])) {		 // Si se definió el código del item 2;
		$codigo_item2 = $_POST["codigo_item2"];	// Asignarlo a la variable $codigo_item2;
	}

	if (isset($_POST["descripcion_item2"])){			    // Si se definió la descripción del item 2;
		$descripcion_item2 = $_POST["descripcion_item2"];  // Asignarla a la variable $descripcion_item2;
	}

	if (isset($_POST["cantidad_item2"])){			 // Si se definió la cantidad del item 2;
		$cantidad_item2 = $_POST["cantidad_item2"];	// Asignarla a la variable $cantidad_item2;
		$cantidad_item2 = (int)$cantidad_item2;    // (int) convierte el valor en un integer.
	}

	if (isset($_POST["precio_item2"])){			 // Si se definió el precio del item 2;
		$precio_item2 = $_POST["precio_item2"];	// Asignarlo a la variable $precio_item2;
		$precio_item2 = (int)$precio_item2;  // (int) convierte el valor en un integer.
	}


	// Item 3

	if (isset($_POST["codigo_item3"])) {		 // Si se definió el código del item 3;
		$codigo_item3 = $_POST["codigo_item3"];	// Asignarlo a la variable $codigo_item3;
	}

	if (isset($_POST["descripcion_item3"])){			   // Si se definió la descripción del item 3;
		$descripcion_item3 = $_POST["descripcion_item3"]; // Asignarla a la variable $descripcion_item3;
	}

	if (isset($_POST["cantidad_item3"])){			 // Si se definió la cantidad del item 3;
		$cantidad_item3 = $_POST["cantidad_item3"];	// Asignarla a la variable $cantidad_item3;
		$cantidad_item3 = (int)$cantidad_item3;    // (int) convierte el valor en un integer.
	}

	if (isset($_POST["precio_item3"])){			 // Si se definió el precio del item 3;
		$precio_item3 = $_POST["precio_item3"];	// Asignarlo a la variable $precio_item3;
		$precio_item3 = (int)$precio_item3;  // (int) convierte el valor en un integer.
	}

	// Aclaración: Decidí convertir las variables $precio_item# y $cantidad_item# a INTEGER, 
	// ya que no me permitía realizar la operación de multiplicación, por ser del tipo STRING.

?>

<!DOCTYPE html>	
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/microsoft/74/purple-heart_1f49c.png"/> <!-- Ícono de la Página -->
	<title>Recepción</title> <!-- Título de la página -->

	<style> /* --- Estilo de la página --- */

	@import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600;700&display=swap');

	.highlight .comment {color: lightgreen; font-style: italic;}

	* {
		font-family: "Fira Code", monospace;
		font-size: 13px; 
		font-weight: 400; 
		image-rendering: -webkit-optimize-contrast; 
	}

	body {
		background-color: #f5f5f5;
		height: 100%;
		margin: 0;
		padding: 0;
	}

	.container {
		display: block;
		height: 100%;
		margin: 0 auto;
		animation: page 2s;
		}		
		@-moz-keyframes page {
		    from { opacity: 0; }
		    to   { opacity: 1; }
	}

	.window {
		background: #dddddd;
		border: solid 0px #feb123;
		border-radius: 10px;
		box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.15), 0px 8px 16px rgba(0, 0, 0, 0.15);
		padding: 15px;
		margin: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		width: 540px;
	}

	table {border-collapse: collapse;}

	tr#title, td#title {
		font-weight: 500;
		border: solid 2px #000;
		text-transform: uppercase;
	}

	td {
		width: 150px;
		padding: 5px;
		border: solid 0px rgba(0,0,0,0.3);
		text-align: center;
	}

	td input {
		margin-top: 5px;
		margin-bottom: 5px;
		border-radius: 0px;
		border: solid 1px black;
	}	

	td input:focus {
		border: solid 1px black;
		outline: none !important;
		box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.05), 0px 8px 16px rgba(0, 0, 0, 0.05);
	}

	input {
		border-radius: 0px;
		background: transparent;
		border: solid 1px black;
	}

	td#columna-total {text-align: right;}

	/* --- Selección de texto ----- */
	::selection {background: rgba(252,84,83,.5); color: #000;}
	::-moz-selection {background: rgba(252,84,83,0.5); color: #000;}
	</style>
</head>

<body> <!-- Cuerpo de la Página -->
	<div class="container"> <!-- Crea un contenedor -->
	<div class="window"> 	<!-- Crea una ventana -->
	<table>	<!-- Crea una tabla -->

		<tr> <!-- Crea una fila para la Fecha -->
			<td id="title">Fecha</td>
			<td>
				<?php 
					print "$fecha"; // Imprime la fecha
				?>
			</td>
		</tr>

		<tr> <!-- Crea una fila para el Nombre -->
			<td id="title">Nombre</td>
			<td>
				<?php 
					print "$nombre"; // Imprime el nombre
				?>
			</td>
		</tr>

		<tr> <!-- Crea una fila para el Impuesto -->
			<td id="title">Impuesto</td>
			<td>
				<?php 
					print "$impuesto_seleccionado".' %'; // Imprime el impuesto seleccionado.
				?>
			</td>
		</tr>

		<tr id="title"> <!-- Crea una fila para el Detalle -->
			<td colspan="5" id="title">Detalle</td>
			</tr>

		<tr id="title">	 <!-- Crea una fila para el Código, Descripción, Cantidad, Precio y Total -->
			<td id="title">Código</td>
			<td id="title">Descripción</td>
			<td id="title">Cantidad</td>
			<td id="title">Precio</td>
			<td id="title">Total</td>
		</tr>



		<!-- Fila Item 1 -------------------------------------->

		<?php

			// Crea una variable que almacena el resultado de la operación: (Precio * Cantidad) del Item #1
			$total_item1 = $precio_item1 * $cantidad_item1; 

			// Crea una variable que da origen a una fila con datos provenientes del formulario "tienda".
			$fila_item1 =  "<tr> <!-- fila item 1 -->
							<td>$codigo_item1</td>
							<td>$descripcion_item1</td>
							<td>$cantidad_item1</td>
							<td>$precio_item1</td>
							<td id=columna-total>$total_item1 $</td>
							</tr>";				

			// Crea una condición (if) ...
			if ($precio_item1 == "0" && 	// Si el precio del item 1 es igual a "0", 
				$cantidad_item1 == "0") {  // y si la cantidad del item 1 es igual a "0", 
										  // No ejecutar/imprimir nada.
				} else {				 // En caso contrario,
				print $fila_item1;	    // Imprimir la variable $fila_item1.
			}
		?> 


		<!-- Fila Item 2 -------------------------------------->

		<?php

			// Crea una variable que almacena el resultado de la operación: (Precio * Cantidad) del Item #2
			$total_item2 = $precio_item2 * $cantidad_item2;

			// Crea una variable que da origen a una fila con datos provenientes del formulario "tienda".
			$fila_item2 =  "<tr> <!-- fila item 2 -->
							<td>$codigo_item2</td>
							<td>$descripcion_item2</td>
							<td>$cantidad_item2</td>
							<td>$precio_item2</td>
							<td id=columna-total>$total_item2 $</td>
							</tr>";				

			// Crea una condición (if) ...
			if ($precio_item2 == "0" && 	// Si el precio del item 2 es igual a "0", 
				$cantidad_item2 == "0") {  // y si la cantidad del item 2 es igual a "0", 
										  // No ejecutar/imprimir nada.
				} else {				 // En caso contrario,
				print $fila_item2;	    // Imprimir la variable $fila_item2.
			}
		?> 


		<!-- Fila Item 3 -------------------------------------->

		<?php

			// Crea una variable que almacena el resultado de la operación: (Precio * Cantidad) del Item #3
			$total_item3 = $precio_item3 * $cantidad_item3; 

			// Crea una variable que da origen a una fila con datos provenientes del formulario "tienda".
			$fila_item3 =  "<tr> <!-- fila item 3 -->
							<td>$codigo_item3</td>
							<td>$descripcion_item3</td>
							<td>$cantidad_item3</td>
							<td>$precio_item3</td>
							<td id=columna-total>$total_item3 $</td>
							</tr>";				

			// Crea una condición (if) ...
			if ($precio_item3 == "0" && 	// Si el precio del item 3 es igual a "0", 
				$cantidad_item3 == "0") {  // y si la cantidad del item 3 es igual a "0", 
										  // No ejecutar/imprimir nada.
				} else {				 // En caso contrario,
				print $fila_item3;	    // Imprimir la variable $fila_item3.
			}
		?> 

		
		<!-- Neto, Impuestos y Total -------------------------------------->

		<tr> <!-- Fila: Cálculo de Importe Neto -->
			<td colspan="3"></td>
			<td id="title">Neto</td>
			<td id=columna-total>
				<?php
					// Crea una variable que almacena el resultado de una suma entre tres variables definidas anteriormente.
					$importe_neto = $total_item1 + $total_item2 + $total_item3;

					print number_format($importe_neto).' $'; // Imprimo la variable con un formato.
				?>
			</td>
		</tr>

		<tr> <!-- Fila: Cálculo de Impuestos -->
			<td colspan="3"></td>
			<td id="title">Impuesto</td>
			<td id=columna-total>
				<?php
					// Aplico el impuesto seleccionado al importe neto, y asigno el resultado a una variable.
					$impuesto = (($importe_neto * $impuesto_seleccionado)/100); 

					print number_format($impuesto).' $'; // Imprimo la variable con un formato.
				?>
					
			</td>
		</tr> 

		<tr> <!-- Fila: Cálculo de Precio Total -->
			<td colspan="3"></td>
			<td id="title">Total</td>
			<td id=columna-total>
				<?php
					// Crea una variable que almacena el importe total a pagar, este se obtiene
					// sumando el importe neto con el impuesto calculado anteriormente.
					$resumen_total = $importe_neto + $impuesto;

					print number_format($resumen_total).' $' // Imprimo la variable con un formato.
				?>
			</td>
		</tr>

		<tr><td><br></td></tr>

		<tr>
			<td colspan=5>
				<input type="button" id="button" value="Regresar" onclick="history.back()" title="Regresar a la página principal." alt="Regresar a la página principal."> <!-- Botón para regresar a la página anterior -->
				<input type="button" id="button" value="Actualizar Sistema" onClick="window.location.reload();" title="Actualiza el sistema sin perder los datos." alt="Actualiza el sistema sin perder los datos."> <!-- Botón para actualizar la página -->
			</td>
		</tr>
	</table>
	</div>
	</div>
</body>
</html>