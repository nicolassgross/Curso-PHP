<?php

    //Escopo global
    $x = 10;

    echo "$x global <br>";
    
    //Escopo local
    function teste() {
        $x = 5;

        echo "$x local <br>";
    };

    //Chamando escopo local
    teste();

    //Escopo de Static
    function teste2() {
        $a = 0;
        $a++;

        echo "$a <br>";
    }

    teste2();
    teste2();
    teste2();

    function testeStatic() {
        static $a = 0;
        $a++;

        echo "$a <br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();

    //Escopo de Paramêtro
    function soma($a, $b) {
        echo $a + $b;
        echo "<br>";
    }

    soma(2, 4);
    soma(55, 98);
    soma(43, 67);

?>