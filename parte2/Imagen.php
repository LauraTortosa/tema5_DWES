<?php

class Imagen 
{
    //atributos
    private $src; //nombre
    private $border = 0; //ancho
    private $ruta_images; //ruta

    //metodos
    function __construct($src, $border) {
        $this->src = $src;
        $this->border = $border;
    }

    function __toString() {
        return "img src=" + $this->ruta_images + " border=" + $this->border + "/>";

    }
}




?>