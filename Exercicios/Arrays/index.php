<?php

    //Variáveis com arrays
    $a = [1, 2, 3];
    $nicolas = ["Nicolas", 20 , "Programador"];

    //Mostrando o valor dos Arrays declarados nas variáveis
    print_r($a);
    echo "<br>";
    echo $a[2];
    echo "<br>";

    echo "<br>";
    print_r($nicolas);
    echo "<br>";
    //print_r($nicolas[0]);

    $pessoa = ['nome' => 'Nicolas', 'Profissão' => 'Programador', 'Personalidade' => 'Calmo'];
    echo "<br>";
    echo $pessoa['nome'];
    echo "<br>";
    print_r($pessoa);


?>