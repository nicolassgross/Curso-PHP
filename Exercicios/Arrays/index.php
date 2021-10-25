<?php

    //Variáveis com arrays
    $a = [1, 2, 3];
    $pessoa = ['nome' =>"Nicolas", 'idade' => 20 , 'profissao' => "Programador"];
    $aluno = $pessoa['nome'];
    $profissao = $pessoa['profissao'];

    //Mostrando o valor dos Arrays declarados nas variáveis
    print_r($a);
    echo "<br>";
    echo $a[2];
    echo "<br>";

    echo "<br>";
    echo $pessoa['nome'];
    echo "<br>";
    print_r($pessoa);
    echo "<br>";

    //Utilizando array associativo
    echo "<br>";
    echo "O aluno se chama $aluno e a sua profissão é $profissao";
    echo "<br>";

    if ($pessoa['idade'] >= 18) {
        echo "Você é maior de idade";
    };

?>