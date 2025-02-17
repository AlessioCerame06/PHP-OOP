<?php
    header("Content-Type: application/json");

    require 'Alunno.php';
    $listaStudenti = [
        new Alunno ("Alessio", "Cerame", 18),
        new Alunno ("Alessio", "Bianchi", 20),
        new Alunno ("Alessio", "Verdi", 38),
    ];
?>