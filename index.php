<!-
    * Author: Ricardo R. Condado
    * User
->

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title> Imprimir por pantalla - Master en PHP </title>
    </head>
    <body>
        <h1> Master en PHP - R Condado </h1>

        <?php
            echo '<h2> This is a letterhead</h2>';
            echo '<h3> Listado de videojuegos</h3>';
            echo '<ul>'
                .'<li>GTA V</li>'
                .'<li>FIFA 23</li>'
                .'<li>Mario Bros</li>'
                .'</ul>';
        ?>
    <h1>Segunda Lista </h1>
        <?php
        echo '<h2> Segundo texto </h2>';
        ?>
        <?= "Welcome" ?>

    </body>

    <?php
        $mi_primera_variable = "Hello World2";
        echo '<h1>'.$mi_primera_variable.'</h1>';
    ?>

    <?php
        // Variables de servidor
        echo '<h1>';
        echo $_SERVER['SERVER_ADDR'];
        echo '<br/>';
        echo $_SERVER['SERVER_NAME'];
        echo '<br/>';
        //echo $_SERVER['SERVER_SOFTWARE'];
        //echo $_SERVER['SERVER_SOFTWARE'];
        echo $_SERVER['HTTP_USER_AGENT'];
        // echo $_SERVER['PATH_INFO'];
        echo '</h1>';
    ?>
</html>

