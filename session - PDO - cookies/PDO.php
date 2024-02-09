<?php
    $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

    $stmt = $conn->prepare("select * from tb_usuarios order by deslogin");

    $stmt->execute();

    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($resultado as $linha){
        foreach($linha as $chave => $valor){
            echo "<strong> ". $chave. "</strong> ". $valor."<br /> ";
        }
         echo "====================================================<br/>";
    }

   