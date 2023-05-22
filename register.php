<?php 

include("conexionbd.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['name']) > 1 && strlen($_POST['email']) > 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fecharegistro = date("d/m/y");
	    $consulta = "INSERT INTO usuarios(nombre, email, fecha_registro) VALUES ('$name','$email','$fecharegistro')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
                <h3 class="ok">¡Te has inscripto correctamente! Haz click aqui para volver al inicio: <a href="http://localhost:8013/PC/WEB/">🌌</a></h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}