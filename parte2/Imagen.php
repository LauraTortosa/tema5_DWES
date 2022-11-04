<?php

class Imagen 
{
    //atributos
    private $src; //nombre
    private $border; //ancho
    private $ruta_images; //ruta

    //metodos
    function __construct($src, $border = 0) {
        $this->src = $this->ruta_images.$src;
        $this->border = $border;
    }

    function __toString() {
        return "<img src=" . $this->ruta_images . " border=" . $this->border . "/>";

    }
}




?>