
<html>
    <head>
        <meta charset="UTF-8">
        <title>Suma de 2 numeros</title>
    </head>
    <body>
        <div>        
            <form name="Suma" method="POST" action="suma.php">
                <input name="x" type ="number" placeholder="Inserta un número"><br>
            <input name="y" type ="number" placeholder="Inserta un número">
            <button name="sumar" type ="submit">Sumar</button>
            </form>
        </div>
        <?php
        if (isset($_POST["sumar"])&& $_POST['x']!==$_POST['y']) {
        $suma=$_POST['x']+$_POST['y'];
        echo "El resultat és $suma";
        } else if (isset($_POST["sumar"])&& $_POST['x']==$_POST['y']) {
        $double=($_POST['x']+$_POST['y'])*2;
        echo "El resultat és $double"; 
        }       
        ?>
    </body>
</html>
