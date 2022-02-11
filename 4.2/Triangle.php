<?php

class Triangle extends Shape {
    public function __construct($altura, $ancho) {
        parent::__construct($altura, $ancho);
    }
    
    public function area () {
        $area = ($this->width * $this->height)/2;
        return $area;      
        }
}
