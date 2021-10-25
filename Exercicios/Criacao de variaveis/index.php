<?php

    //Criação e utilização
    echo "**Criação e utilização**";
    $teste = "Algum texto";
    $num = 10;
    $velocidadeMaxima = 100;
    $velocidadeMinima = 20;

    echo $teste;

    echo "<br>";
    echo $num;
    
    echo "<br>";
    echo "A velocidade Máxima é $velocidadeMaxima, e a Mínima é $velocidadeMinima";

    $velocidade = 120; //Inteiro
    $marca = "Ferrari"; //String
    $itens = ["motor" => "Motor V12", "origem" => "Italiana", "cambio" => "Automático"]; //Array

    echo "<br>";
    print_r($itens);
    echo "<br>";
    echo "Marca $marca e velocidade $velocidade Km/h";

    $a = 10;
    $b = 5.1;
    $c = $a + $b;

    echo "<br>";
    echo $c;
    echo "<br>";

    //Variável de variável
    echo "**Variável de variável** <br>";
    $x = "nome";
    $$x = "Nicolas";

    echo "$nome <br>";

    //Variável com referência a outra
    echo "**Variável com referência a outra**  <br>";
    $x = 10;

    $y =& $x;
    echo $y;

?>