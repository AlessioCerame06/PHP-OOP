<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        require 'Alunno.php';
            $listaStudenti = [
                new Alunno ("Alessio", "Cerame", 18),
                new Alunno ("Alessio", "Bianchi", 20),
                new Alunno ("Alessio", "Verdi", 38),
            ];

            echo "<h1>LISTA STUDENTI</h1>";
            foreach($listaStudenti as $studente) {
                $studente -> toString();
            }
        ?>
    </body>
</html>