<?php
class Imagen {
    private $src;
    private $border;
    private $ruta_images = "images/";

    public function __construct($pSrc, $pBorder = 0) {
        $this->setSrc($pSrc);
        $this->setBorder($pBorder);
    }

    public function __toString() {
        return "<img src='" . $this->src . "' border='" . $this->border . "' />";
    }

    public function setSrc($ruta) {
        $ruta_real = $_SERVER['DOCUMENT_ROOT'] . '/' . $this->ruta_images . $ruta;
        if (!file_exists($ruta_real)) {
            echo "Error: la ruta no existe.";
            exit;
        }
        $this->src = $this->ruta_images . $ruta;
    }

    public function setBorder($pBorder) {
        if (!is_int($pBorder) || $pBorder < 0) {
            echo "Error: el borde no es un entero mayor o igual a 0.";
            exit;
        }
        $this->border = $pBorder;
    }
}
?>