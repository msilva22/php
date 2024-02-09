<?php
    $conn =new PDO("mysql:dbname=dbphp7;host=localhost","root","1234567");

    $stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha) values (:LOGIN, :PASSWORD)");

    $login = "jose";
    $password = "123456789";
    
    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);
    $stmt->execute();

    echo "Dados inseridos com Sucesso!";
?>