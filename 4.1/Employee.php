
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Employee {
            private $name;
            private $salary;
            
            public function initialize ($nombre, $sueldo) {
                $this->name=$nombre;
                $this->salary=$sueldo;
            }
            public function print () {
                echo "<h3>"."<u>".$this->name."<br>"."</u>"."</h3>";
                if ($this->salary>=6000){
                    echo "El sou percebut és de: ".$this->salary."€. S'han de pagar impostos."."<br>";
                } else {
                    echo "El sou percebut és de: ".$this->salary."€. No s'han de pagar impostos."."<br>";
                }
            }
        }
        /*Testing*/
        $per1=new Employee();
        $per1->initialize ('Jordi', 6000);
        $per1->print ();
        $per1->initialize ('Laura', 5999);
        $per1->print ();
        $per1->initialize ('Marc', 0);
        $per1->print ();
        $per1->initialize ('Anna', 10000);
        $per1->print ();
        ?>
    </body>
</html>
