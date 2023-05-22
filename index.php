<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css.css">
        <title>Login/Register</title>
    </head>
    <body>
            <h1>Bienvenido</h1>
            <form action="http://localhost:8013/PC/WEB/login.php">
                <input type="submit" value="Login" />
            </form>
            <form action="http://localhost:8013/PC/WEB/registrar.php">
                <input type="submit" value="Registrar-se" />
            </form>
        <?php
        include("conexionbd.php");
        ?>
    </body>
</html>