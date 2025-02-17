<?php
class Indirizzo {
    protected $via;
    protected $cap;
    protected $citta;
    protected $provincia;

    public function __construct ($via, $cap, $citta, $provincia) {
        $this -> via = $via;
        $this -> cap = $cap;
        $this -> citta = $citta;
        $this -> provincia = $provincia;
    }

    public function getVia () {
        return $this->via;
    }

    public function setVia ($via) {
        $this->via = $via;
    }

    public function getCap () {
        return $this->cap;
    }

    public function setCap ($cap) {
        $this->cap = $cap;
    }

    public function getProvincia () {
        return $this->provincia;
    }

    public function setProvincia ($provincia) {
        $this->provincia = $provincia;
    }
}
?>