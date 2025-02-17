<?php
class Voto {
    protected $materia = "";
    protected $valore = 6;
    protected $descrizione = "";

    public function __construct ($materia, $valore, $descrizione) {
        $this -> materia = $materia;
        $this -> valore = $valore;
        $this -> descrizione = $descrizione;
    }

    public function getMateria () {
        return $this->materia;
    }

    public function setMateria ($materia) {
        $this->materia = $materia;
    }

    public function getValore () {
        return $this->valore;
    }

    public function setValore ($valore) {
        $this->valore = $valore;
    }

    public function getDescrizione () {
        return $this->descrizione;
    }

    public function setDescrizione ($descrizione) {
        $this->descrizione = $descrizione;
    }
}
?>