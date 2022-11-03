<?php

final class ArticuloRebajado extends Articulo {
    private $rebaja;

    function __construct($pNombre, $pPrecio, $pRebaja) {
        parent::__construct();
        $this->pRebaja = $pRebaja;
    }

    private function calculaDescuento() {
        return $pRebaja / 100;
    }

    public function precioRebajado() {
        return $precio - $rebaja;
    }

    function __toString() {
        parent::__toString() + ' La rebaja es: ' . $this->rebaja . '%' .'<br />'. 'El descuento es '. self::calculaDescuento().'$';
    }


}