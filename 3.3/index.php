
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $finalCount= 0;
        function hide ($finalCount){
            for ($i=1; $i<=$finalCount; $i++) {
                echo $i."<br>";
            } 
         return $finalCount;
        }
        echo "El compte ha finalitzat a ".hide(9).". Amagat!";
        ?>
    </body>
</html>
