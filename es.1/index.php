<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            require 'Automobile.php';
            $listaAutomobili = [
                new Automobile ("Ford", 1998, "Focus"),
                new Automobile ("Ford", 1976, "Fiesta"),
                new Automobile ("Ford", 2020, "Puma"),
            ];

            echo "<h1>Lista automobili</h1>";
            foreach($listaAutomobili as $automobile) {
                $automobile -> toString ();
                echo "______________________";
            }
        ?>
    </body>
</html>