<html>
<?php

class Rectangle extends Shape {
    public function area () {
        $area = ($this->width * $this->height);
        return $area;      
    }
}
?>
</html>