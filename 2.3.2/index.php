<!DOCTYPE html>
<!--
Escriu un programa en PHP que compta el nombre total de vegades que un valor existeix en l'array.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $array = array (1,2,3,3,4,5,7,7,7,7);
        print_r(array_count_values($array));

        ?>
    </body>
</html>
