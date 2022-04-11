<!DOCTYPE html>
<!--
Escriu un programa en PHP per convertir una cadena en un array (retallant cada caràcter i eliminant les línies buides).

Entrada
Hello world

Sortida
array(10) { [0]=> string(1) "H" [1]=> string(1) "e" [2]=> string(1) "l" [3]=> string(1) "l" [4]=> string(1) "o" [5]=> string(1) "W" [6]=> string(1) "o" [7]=> string(1) "r" [8]=> string(1) "l" [9]=> string(1) "d"}
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $sentence = "Hello world";
         $searchString = " ";
          $replaceString = "";
          $noSpace = str_replace ($searchString, $replaceString, $sentence);
         $noSpace = str_split($noSpace);
         var_dump($noSpace);
        /*Solución alternativa para borrar el espacio DENTRO del array, aunque altera posición. Se podria hacer también con array_slice y te reordena la posición de verdad.
        $arraySentence = str_split($sentence);
        if (($search = array_search(" ", $arraySentence)) !== false) {
        unset($arraySentence[$search]);
        ;
        print_r(array_values($arraySentence));
        }
         */
        ?>
    </body>
</html>
