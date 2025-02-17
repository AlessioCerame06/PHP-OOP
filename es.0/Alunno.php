<?php
class Alunno implements JsonSerializable {
    protected $nome;
    protected $cognome;
    protected $eta;
    protected $indirizzo;
    protected $voto = [];

    public function __construct($nome, $cognome, $eta){
        $this -> nome = $nome;
        $this -> cognome = $cognome;
        $this -> eta = $eta;
    }

    public function getNome () {
        return $this->nome;
    }

    public function setNome ($nome) {
        $this->nome = $nome;
    }

    public function getCognome () {
        return $this->cognome;
    }

    public function setCognome ($cognome) {
        $this->nome = $cognome;
    }

    public function getEta () {
        return $this->eta;
    }

    public function setEta ($eta) {
        $this->nome = $eta;
    }

    public function getVoto () {
        return $this->voto;
    }

    public function setVoto (Voto $voto) {
        $this->voto[] = $voto;
    }

    public function toString() {
        echo "<p>Nome: " . $this->nome . "</p><p>Cognome: " . $this->cognome . "</p><p>Età: " . $this->eta . "</p>";
    }

    public function jsonSerialize () : array {
        return [
            'nome' => $this->nome,
            'cognome' => $this->cognome,
            'eta' => $this->eta,
            'voti' => $this->voto
        ];
    }
}
?>