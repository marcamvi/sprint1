<!DOCTYPE html>
<!--
$ X = array (10, 20, 30, 40, 50);

Elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades.

Per example: Eliminant el número 40
Sortida
array(5) { [0]=> int(10) [1]=> int(20) [2]=> int(30) [3]=> int(40) [4]=> int(50) }
array(4) { [0]=> int(10) [1]=> int(20) [2]=> int(30) [3]=> int(50) }
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $x = array (10, 20, 30, 40, 50);
        $search = array_search(40, $x);
        if ($search !== false) {
            array_splice($x, $search, 1);
            var_dump ($x);
        }
        ?>
    </body>
</html>
