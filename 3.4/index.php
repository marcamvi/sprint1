<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $finalCount= 3;
        function hide ($finalCount=10){
            for ($i=1; $i<=$finalCount; $i++) {
                echo $i."<br>";
            } 
         return $finalCount;
        }
        echo "El compte ha finalitzat a ".hide().". Amagat!";
        ?>
        
    </body>
</html>
