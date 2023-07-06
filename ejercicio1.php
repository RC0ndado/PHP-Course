<?php

    /* Ejercicio1.
         Crear dos variables "país" y "continente" y mostrar su valor por la pantalla (imprimirlo)
        Poner en un comentario que tipo de dato es.
    */

    /*
    $pais = "Mexico";
    $continente = "América";



    echo $pais.' '.$continente.'</br>';
    echo gettype($pais).' '.gettype($continente);
    */

    /* Ejercicio 2: Escribir unn script en PHP que nos muestre por pantalla
        todos los números pares que hay del 1 al 100.
     */

    /*
    for  ($i = 1; $i<=100; $i++){
        if($i%2 == 0){
            echo $i.'</br>';
            $i++;
        }
    }
    */

    /*
     Ejercicio 3: Escribir un programa que imprima por pantall los cuadrados
    (x^2) de los 40 primeros números naturales. PD: Utilizar while
    */

/*
    $j = 1;
    while ($j <= 40){
        echo $j**2 . '</br>';
        $j++;
    }
*/

    /*
        Ejercicio 6: Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10.
    */

?>
<!--
<!doctype html>
<html>
    <head>

    </head>
    <body>
        <table border="1">
            <tr>
                <td> Operación </td>
                <td> Resultado </td>
            </tr>
            <?php
                for ($i = 1; $i <=10; $i++){
                    for ($j = 1; $j <= 10; $j++){
                        echo '<tr>'
                            .'<td>'
                            .$i.'x'.$j
                            .'</td>'
                            .'<td>'
                            .$i*$j
                            .'</td>'
                            .'</tr>';
                    }
                }
            ?>
        </table>
    </body>
</html>

-->

<?php
    echo '<table border="1">'
            .'<tr>';
    for ($h = 1; $h<=10; $h++){
        echo '<td>'.$h.'</td>';
    }
    echo '</tr>';
        for($i=1; $i<=10; $i++){
            echo '<tr>';
            for ($j=1; $j<=10; $j++){
                echo '<td>'
                    .$j.'x'.$i.'='.$i*$j
                    .'</td>';
            }
            echo '</tr>';
        }
    echo '</table>';
?>





