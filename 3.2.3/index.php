<html>
    <head>
        <meta charset="UTF-8">
        <title>Cost en botiga</title>
    </head>
    <body>
        <?php
        $numChoco = 2;
        $numGum = 1;
        $numCan = 1;
        function chocolate ($numChoco) {
            $totalChoco = 1*$numChoco;
            return $totalChoco;
        }
        function gum ($numGum) {
            $totalGum = 0.5*$numGum;
            return $totalGum;
        }
        function candy ($numCan) {
            $totalCan = 1.5*$numCan;
            return $totalCan;
        }
        
        $total = candy($numCan) + gum ($numGum) + chocolate ($numChoco);
        echo "El cost total de $numChoco xocolates, $numGum xiclets i $numCan caramels és de $total €."
       
        ?>
    </body>
</html>
