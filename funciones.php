<?php
    function muestraNombres(){
        echo "Rey Condado <br/>";
        echo "Katy Arias <br/>";
        echo "Charles Buendía <br/>";
        echo "Carl Montreal <br/>";
    }

    muestraNombres();

    /*
     * Ejemplo 2
     * */

    function tabla($numero){
        echo "<h3> Tabla de multiplicar del número: $numero </h3>";
        for($i = 1; $i<=10; $i++){
            $operacion = $numero*$i;
            echo "$numero x $i = $operacion <br/>";
        }
    }

    tabla(77);

    if (isset($_GET['numero'])){
        tabla($_GET['numero']);
    } else {
        echo "No hay numero para multiplicar";
    }

    for($i = 0; $i<=10; $i++){
        tabla($i);
    }

    function calculadora($numero1, $numero2, $negrita = false){
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;
        $division = $numero1 / $numero2;

        if ($negrita){
            echo "<h1>";
        }

        echo 'Suma: '.$suma.'<br/>';
        echo 'Resta: '.$resta.'<br/>';
        echo 'Multiplicación: '.$multiplicacion.'<br/>';
        echo 'División: '.$division.'<br/>';
    }

    calculadora(20, 10);
    calculadora(30, 10, true);

    function getNombre($nombre){
        $texto = "El nombre es: $nombre";
        return $texto;
    }

    function devuelveNombre($nombre, $apellido){
        $texto = getNombre($nombre).
                '<br/>'. "Los apellidos son: ".
                $apellido;
        return $texto;
    }

    echo devuelveNombre("Rey", "Condado");

