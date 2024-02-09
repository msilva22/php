<?php
    $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPoling=0","","");

    $stmt = $conn->prepare("select * from tb_usuarios order by deslogin");

    $stmt->execute();

    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($resultado);
