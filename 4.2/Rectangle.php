<html>
<?php

class Rectangle extends Shape {
    public function __construct($altura, $ancho) {
        parent::__construct($altura, $ancho);
    }

    public function area () {
        $area = ($this->width * $this->height);
        return $area;      
    }
}
?>
</html>