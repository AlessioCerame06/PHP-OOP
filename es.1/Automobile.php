<?php
require 'Veicolo.php';
class Automobile extends Veicolo {
    private $modello;

    public function __construct ($marca, $anno, $modello) {
        parent::__construct($marca, $anno);
        $this -> modello = $modello;
    }

    public function getModello () {
        return $this->modello;
    }

    public function setModello ($modello) {
        $this->modello = $modello;
    }

    public function toString() {
        parent::toString();
        echo "<p>Modello: " . $this -> modello . "</p>";
    }
}
?>