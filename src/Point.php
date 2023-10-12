<?php

namespace Opmvpc\Formes;

class Point {
   
   

    public function __construct(protected float $x, protected float $y){} 
       
    

    public function getX() :float {
        return $this->x;
    }

    public function getY() :float {
        return $this->y;
    }
}
