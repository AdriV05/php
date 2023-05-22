<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css.css">
        <title>Login</title>
    </head>
    <body>
        <form method="post">
            <h1>Login</h1>
            <input type="text" name="name" placeholder="Nombre Completo">
            <input type="email" name="email" placeholder="Email">
            <input type="submit" name="login">
        </form>
        <?php
        include("log.php");
        ?>
    </body>
</html>