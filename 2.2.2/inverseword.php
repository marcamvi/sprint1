<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>        
            <form name="word" method="POST" action="inverseword.php">
                <input name="word" type ="text" placeholder="Inserta una paraula"><br>
            <button name="sub" type ="submit">Submit</button>
            </form>
        </div>
        <?php
         /* Escriu un programa PHP per intercanviar el primer i últim caràcter d'una cadena 
         * donada i imprimeix la nova cadena.
         
        Exemple

        Entrada
        wxyz
        a   
        ab

        Sortida
        zxyw
        a
        ab
        */
        if (isset($_POST["sub"])&&($_POST["word"])) {
            $word= $_POST["word"];
            $first = substr($word, 0, 1);
            $last = substr ($word, -1);
            $word = str_split ($word);
            $word = array_slice($word,0,-1);
            array_shift($word);
            array_unshift($word, $last);
            array_push($word, $first);
            $word = implode ($word);
            echo $word;
           
        }
        ?>
    </body>
</html>
