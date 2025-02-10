<?php
class Veicolo {
    private $marca;
    private $anno;

    public function __construct($marca, $anno){
        $this -> marca = $marca;
        $this -> anno = $anno;
    }

    public function getMarca () {
        return $this->marca;
    }

    public function setMarca ($marca) {
        $this->marca = $marca;
    }

    public function getAnno () {
        return $this->anno;
    }

    public function setAnno ($anno) {
        $this->marca = $anno;
    }

    public function toString() {
        echo "<p>Marca: " . $this -> marca . "</p><p>Anno: " . $this -> anno . "</p>";
    }
}
?>