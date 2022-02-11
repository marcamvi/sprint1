
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $x= 2;
        $y=5;
        $sumxy= $x+$y;
        $subxy= $x-$y;
        $multxy= $x*$y;
        $modxy=$x%$y;
        $n=2.3;
        $m=5.1;
        $summn= $m+$n;
        $submn= $m-$n;
        $multmn= $m*$n;
        $modmn=$m%$n;
        
        echo 'El valor de la variable x és '.$x.' i el de la variable y és '.$y.'.'."<br>";
        echo 'x+y= '.$sumxy."<br>";
        echo 'x-y= '.$subxy."<br>";
        echo 'x*y= '.$multxy."<br>";
        echo 'x%y= '.$modxy."<br>";
        
        echo 'El valor de la variable m és '.$m.' i el de la variable n és '.$n.'.'."<br>";
        echo 'm+n= '.$summn."<br>";
        echo 'm-n= '.$submn."<br>";
        echo 'm*n= '.$multmn."<br>";
        echo 'm%n= '.$modmn."<br>";
        
        echo 'El doble de '.$x.' és '.$x*2 .'.'."<br>";
        echo 'El doble de '.$y.' és '.$y*2 .'.'."<br>";
        echo 'El doble de '.$m.' és '.$m*2 .'.'."<br>";
        echo 'El doble de '.$n.' és '.$n*2 .'.'."<br>";
        
        echo 'La suma de '.$x.' + '.$y.' + '.$m.' + '.$n.' és '.$x+$y+$m+$n .'.'."<br>";
        echo 'La multiplicació de '.$x.' x '.$y.' x '.$m.' x '.$n.' és '.$x*$y*$m*$n .'.'."<br>";
        ?>
    </body>
</html>
