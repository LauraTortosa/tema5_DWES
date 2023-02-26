<?php
require_once('imagenMejorada.php');

$img = new Imagen('eevee1.jpg');
echo $img . "<br>";

$img2 = new Imagen('eevee2.jpg', 10);
echo $img2 . "<br>";

$img3 = new Imagen('pikachu.jpg');
$img3->setSrc('pikachu.jpg');

$img4 = new Imagen('eevee2.jpg', -5);

$img2->src = 'eevee1.jpg';
$img2->border = 20;

$img5 = new Imagen('eevee2.jpg');
$img5->border = "lll"; 

$img6->setSrc('eevee1.jpg'); 
$img6->setBorder(5); 
$img6->src = 'eevee2.jpg'; 
$img6->border = 15; 
echo $img6 . "<br>";
?>