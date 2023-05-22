<?php 

include("conexionbd.php");


if (isset($_POST['login'])) {
    if (strlen($_POST['name']) > 1 && strlen($_POST['email']) > 1) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);

        // Comprueba si los valores existen en la tabla
        $consulta = "SELECT * FROM usuarios WHERE nombre='$name' AND email='$email'";
        $resultado = mysqli_query($conex,$consulta);

        if (mysqli_num_rows($resultado) > 0) {
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header("Location: http://localhost:8013/PC/WEB/cookies.php");
        ?>
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