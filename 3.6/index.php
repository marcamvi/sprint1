
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $random = rand(0,1);
        function isBitten ($random){
        $bit = false;    
            if ($random==1){
                $bit = false;
            } else {
                $bit = true;
            }
        return $bit;
        } 
        $toBit = isBitten ($random);
        if (!$toBit) {
            echo "Au, el Charlie m'ha mossegat!";
        } else {
            echo "El Charlie es menja tranquil·lament una galeta. Bon gos.";
        }
        ?>
    </body>
</html>
