
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $grade;
        function rank($grade) {
            $division="";
            if ($grade>=60 && $grade<=100){
                $division = "Primera Divisió.";
            } else if ($grade>=45 && $grade<60){
                $division = "Segona Divisió.";
            } else if ($grade>=33 && $grade<45) {
                $division = "Tercera Divisió.";
            } else if ($grade>=0 && $grade<33) {
                $division = "Suspens.";
            }else {
                $division = "un valor no vàlid. Introdueix un nou valor.";
            }
        return $division;
        }
        echo "El valor obtingut en les notes correspòn a ".rank(33);
        error_reporting(E_ALL);
        ?>
    </body>
</html>
