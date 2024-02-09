<?php
    $nome ="moises rodrigues";
    echo strtoupper($nome);
    echo "<br />";
    echo strtolower($nome);
    echo "<br />";
    echo ucwords($nome);
    echo "<br />";
    echo ucfirst($nome);

    $empresa = "MR3S";
    echo "<br />";
    echo $empresa = str_replace("R",1, $empresa);

    $frase = " A repetição é a mãe da retençao.";
    $q = strpos($frase, "mãe");

    $texto = substr($frase, 0, $q);
    var_dump($texto);

    $texto2 = substr($frase, $q + strlen("mãe"), strlen($frase));
    var_dump($texto2);
