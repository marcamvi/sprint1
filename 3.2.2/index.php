<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $time = 5;
        function cost ($time) {
            $bill=0;
            if ($time<=3) {
                $bill = 10;
            } else {
                $bill = (($time-3)*5) + 10;
            }
            return $bill;
        }
        
        echo "El cost per $time minuts correspon a ".cost($time)." cèntims.";

        ?>
    </body>
</html>
