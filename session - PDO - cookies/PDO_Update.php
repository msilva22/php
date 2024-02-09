<?php
    $conn =new PDO("mysql:dbname=dbphp7;host=localhost","root","1234567");

    $stmt = $conn->prepare("update tb_usuarios set deslogin =:LOGIN, dessenha =:PASSWORD where idusuario = :ID");

    $login = "joao";
    $password = "qwert";
    $id = 2;
    
    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);
    $stmt->bindParam(":ID",$id);

    $stmt->execute();

    echo "Dados modificados com Sucesso!";
?>