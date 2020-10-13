<?php

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($radius, $name)
    {
        parent::__construct($radius, $name);
    }
    public function compareto($otherCircle)
    {
        $otherRadius =$otherCircle->getRadius();
        if($this->radius>$otherRadius){
            return "hình tròn này lớn hơn hình tròn được so sánh";
        }
        else if($this->radius<$otherRadius){
            return "hình tròn này nhỏ hơn hình tròn được so sánh";
        }
        else{
            return "bằng nhau";
        }
    }
}