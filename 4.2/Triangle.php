<?php

class Triangle extends Shape {

    public function area () {
        $area = ($this->width * $this->height)/2;
        return $area;      
        }
}
