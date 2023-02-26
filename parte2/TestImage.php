<?php

require_once ('Imagen.php');

$img= new Imagen('eevee1.jpg');
echo $img;

$img2 = new Imagen('eevee2.jpg', 10);
echo $img2;

try {
    $img2->src = 'pikachu.jpg';
} catch (Error $error) {
    echo $error->getMessage() . "\n";
}

try {
    $img2->border = 15;
} catch (Error $error) {
    echo $error->getMessage() . "\n";
}


$img2->src = 'eevee1.jpg';
$img2->border = 20;
echo $img2;

$img2->src='pikachu,jpg';
echo $img2;
var_dump($img2);