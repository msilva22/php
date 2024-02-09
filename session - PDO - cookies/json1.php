<?php
$json = '[
    {
      "nome": "João",
      "idade": 20
    },
    {
      "nome": "Pedro",
      "idade": 35
    }
  ]';
  $data = json_decode($json, true);
  var_dump($data);

  ?>