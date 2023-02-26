<?php

final class ArticuloRebajado extends Articulo {
    private $rebaja;

    function __construct($pNombre, $pPrecio, $pRebaja) {
        parent::__construct();
        $this->rebaja = $pRebaja;
    }

    private function calculaDescuento() {
        return $this->precio * $this->rebaja / 100;
    }

    public function precioRebajado() {
        return $this->precio - $this->calculaDescuento();
    }

    function __toString() {
        return parent::__toString() . 'Rebaja = ' . $this->rebaja . 
        '%<br />' . 'Descuento = ' . $this->calculaDescuento() . '&euro;<br />';
    }


}