<!DOCTYPE html>
<!--
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada de el dau en qüestió.

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class PokerDice {
            private static  $dice = array("As", "K", "Q", "J", 7, 8);
            private static $counter = 0;
            
            public function __construct() {
                
            }
            public static function throw () {
                PokerDice::$counter ++;
                $randomValue = array_rand(PokerDice::$dice, 1);
                $face = PokerDice::$dice[$randomValue];
                
                return $face;
            
            }
            public function shapeName () {
                echo self::throw();
            }
            
            public static function getTotalThrows () {
                return PokerDice::$counter;
            }
        }
        
        $dice1 = new PokerDice();
        $dice2 = new PokerDice();
        $dice3 = new PokerDice();
        $dice4 = new PokerDice();
        $dice5 = new PokerDice();
        echo "Tirada uno: ";
        $dice1->shapeName();
        echo "</br>";
        echo "Tirar los cinco dados: </br>";
        fiveThrows ($dice1, $dice2, $dice3, $dice4, $dice5);
        echo "¿Cuántas tiradas se han hecho? ".PokerDice::getTotalThrows();
        function fiveThrows ($dic1, $dic2, $dic3, $dic4, $dic5) {
            $dic1 -> shapeName();
            echo "</br>";
            $dic2 -> shapeName();
            echo "</br>";
            $dic3 -> shapeName();
            echo "</br>";
            $dic4 -> shapeName();
            echo "</br>";
            $dic5 -> shapeName();
            echo "</br>";
        }
        
        ?>
    </body>
</html>
