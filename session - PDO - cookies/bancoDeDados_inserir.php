<?php
    $conn = new mysqli("localhost", "root","1234567","dbphp7");
    if($conn->connect_error){
        echo "Error: " . $conn->connect_error;
    }

    $stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha) values (?, ?)");

    $stmt->bind_param("ss", $login, $senha);

    $login = "user";
    $senha = "12345";

    $stmt->execute();
    
    $login = "root";
    $senha = "!@#$";

    $stmt->execute();

    