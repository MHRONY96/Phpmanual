<?php
// Using constructor arguments
class Point
{
 protected int $x;
 protected int $y;
 public function __construct($x, $y = 0)
 {
  $this->x = $x;
  $this->y = $y;
 }
}
$p = new Point(4, 5);
$p1 = new Point(4);
// With named parameters (as of PHP 8.0):
$p3 = new Point(y: 5, x: 4);
