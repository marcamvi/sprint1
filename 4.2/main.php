
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './Shape.php';
        require_once './Triangle.php';
        require_once './Rectangle.php';
        
        $rectangle=new Rectangle(4,8);
        echo "L'àrea del rectangle és ".$rectangle->area().".<br>";
        $triangle=new Triangle (3,4);
        echo "L'àrea del triangle és ".$triangle->area().".<br>";
        
        ?>
    </body>
</html>
