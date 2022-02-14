
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $games=array();
        for ($i=1960; $i<=2016; $i= $i+4) {
            $games [] =$i;  
        }
        echo "<pre>";
        var_dump($games);
        echo "</pre>";
        /* Ens han demanat un llistat de tots els anys on es van produir 
        // jocs olímpics desde 1960 inclós fins al 2016. 
        // Programa un bucle que calculi i mostri per pantalla els anys olímpics dins de l'interval esmentat.*/
        ?>
    </body>
</html>
