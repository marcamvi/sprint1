<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function hide () {
            for ($i=0; $i<=10; $i=$i+2) {
                echo $i.'<br>';
            }
        }
        echo hide()."Ha fet trampes! Amagat!";
        ?>
    </body>
</html>
