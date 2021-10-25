<?php

    class Pessoa {
        
        function falar () {
            echo "Hello World";
        }

    }

    $nicolas = new Pessoa();

    $nicolas->nome = "Nicolas";

    echo $nicolas->nome;
    echo "<br>";
    echo $nicolas->falar();
    
?>