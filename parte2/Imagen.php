<?php

class Imagen{
    //atributos
    private $src; //nombre
    private $border; //ancho
    private $ruta_images = "images/"; //ruta

    //metodos
    function __construct($src, $border = 0) {
        $this->src = $this->ruta_images.$src;
        $this->border = $border;
    }

    function __toString() {
        $html = '<img src="' . $this->src . '" border="' . $this->border . '"/>';
        return $html;
    }
}