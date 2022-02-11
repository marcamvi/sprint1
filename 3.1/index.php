<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $age;
        function evenOdd ($age) {
            if ($age%2==0) {
                echo "L'edat de l'usuari, ".$age .", és un número parell.";
            } else {
                echo "L'edat de l'usuari, ".$age .", és un número imparell.";
            }
        }
        echo evenOdd(32);
        ?>
    </body>
</html>
