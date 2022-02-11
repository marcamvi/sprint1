
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $first_array = array (1,2,3,4,5);
        $second_array = array (6,7,8);
        $second_array [] = 9;
        $final = array_merge($first_array, $second_array);
        echo 'El nombre de números emmagatzemats és de '.count ($final)."<br>";
        echo "<pre>";
        var_dump($final);
        echo "</pre>";
        ?>
    </body>
</html>
