<?php
require_once "ArticuloRebajado.php";

$articulo1 = new ArticuloRebajado('Bicicleta', 352.10, 20);

echo $articulo1 . '<br />';
echo 'Precio = ' . $articulo1->precioRebajado() . '&euro;<br />';
var_dump($articulo1);
?>