<?php
include "ComparableCircle.php";
include "Circle.php";
include "Comparable.php";
$cicrle1 = new ComparableCircle(5,"black pink");
$cicrle2 = new ComparableCircle(9,"black");
echo $cicrle1->compareTo($cicrle2);