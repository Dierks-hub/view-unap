<?php
$campo1 = $_POST['var1'];
$campo2 = $_POST['var2'];
$campo3 = $_POST['var3'];

$respuesta1 = $campo1 + $campo2;
$respuesta2 = $campo1 + $campo2 + $campo3;

$respuesta3 = '';

if ($campo3 % 2 == 0) {
    $respuesta3 = 'Par';
} else {
    $respuesta3 = 'Impar';
}

echo json_encode(array(
    'resp1' => $respuesta1,
    'resp2' => $respuesta2,
    'resp3' => $respuesta3,
    'status' => 'success'
));
