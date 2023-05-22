<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css.css">
        <title>Login</title>
    </head>
    <body>
        <form>
        <?php
            function saludar($name = 'señor(a)'){
                echo "<center><h1>Hola $name ¿Como estas?</h1></center>";
            }

            session_start();
            $usuario = $_SESSION['name'];
            $fechainicio = $_SESSION['fechainicio'];

            saludar("$usuario");

            function login($time = 'en la pagina web.'){
                echo "<center><h3>Has iniciado sesion a la/las $time.</h3></center>";
            }

            login("$fechainicio");

            echo "<br>";
            echo "<center><h2>Tu numero para la rifa es el:</h2></center>";

            $dir = 'imagenes/';
            $files = glob($dir . '*.png', GLOB_BRACE);
            $file = $files[array_rand($files)];
        ?>
            <br>
        <center><img src="<?php echo $file; ?>" alt="Imagen aleatoria" /></center>
        </form>
    </body>
</html>