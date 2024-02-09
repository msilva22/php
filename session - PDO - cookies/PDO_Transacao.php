<?php
    $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","1234567");

    $conn->beginTransaction();

    $stmt = $conn->prepare("delete from tb_usuarios where idusuario = ?");

    $id = 3;
    
    
    $stmt->execute(array($id));

    $conn->rollback();

    //$conn->commit();

    echo "Dados deletados com Sucesso!";
?>