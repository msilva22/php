<?php
    require_once("config.php");

    use Cliente\Cadastro;
    
    $cad = new Cadastro();

    $cad->setNome("Moisés Rodrigues");
    $cad->setEmail("moises.eletro33@gmail.com");
    $cad->setSenha("1234567");

    $cad->registrarVenda();

    echo $cad;
?>