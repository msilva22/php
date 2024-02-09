<?php
    $conn = new mysqli("localhost", "root","1234567","dbphp7");
    if($conn->connect_error){
        echo "Error: " . $conn->connect_error;
    }

    $resultado = $conn->query("select * from tb_usuarios order by deslogin");

    $data = array();

    while($linha = $resultado->fetch_assoc()){
       array_push($data, $linha);
    }

    echo json_encode($data);

   
    