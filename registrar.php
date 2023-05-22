<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css.css">
        <title>Register</title>
    </head>
    <body>
        <form method="post">
            <h1>Register</h1>
            <input type="text" name="name" placeholder="Nombre Completo">
            <input type="email" name="email" placeholder="Email">
            <input type="submit" name="registrar">
        </form>
        <?php
        include("register.php");
        ?>
    </body>
</html>