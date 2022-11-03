<?php

class Articulo {
    private $nombre;
    private $precio;

    function __construct($pNombre, $pPrecio) {
        $this->pNombre = $pNombre;
        $this->pPrecio = $pPrecio;
    }

    function __toString() {
        return 'Nombre: ' .$this->nombre.'<br />'. 'Precio: ' .$this->precio.'&euro;<br />';
    }

    function __get($precio) {
        if(property_exists($this,$precio)) {
            return $this->$precio;
        }
    }

    function __set($pPrecio, $precio) {
        if (is_numeric($precio)) {
            $this->pPrecio = $precio;
        }

    }
}