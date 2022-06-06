<?php
class myClass{
 const CONSTANT="Constant Value";
 function showConstant(){
  echo self::CONSTANT." ";
 }
}
echo myClass::CONSTANT."<br/>";
$className= "myClass";
echo $className::CONSTANT."<br/>";

$className=new myClass();
$className->showConstant();
echo $className::CONSTANT;