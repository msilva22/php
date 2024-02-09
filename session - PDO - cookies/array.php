<?php
$frutas = array('laranja','maçã','pera');
print_r($frutas);

$carros[0][0] = 'GM';
$carros[0][1] = 'Cobalt';
$carros[0][2] = 'Onix';
$carros[0][3] = 'Camaro';

$carros[1][0] = 'Ford';
$carros[1][1] = 'Fiesta';
$carros[1][2] = 'Fusion';
$carros[1][3] = 'Eco Sport';

echo $carros[0][3];

echo '<br />';


echo end($carros[1]);

$pessoas = array();
array_push($pessoas, array(
    'nome'=>'João',
    'idade'=>20
));
array_push($pessoas, array(
    'nome'=>'Pedro',
    'idade'=>35
));

print_r($pessoas);
?>

