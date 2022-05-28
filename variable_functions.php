<?php
class Foo{
 function Variable(){
  $name="Bar";
  $this->name;
 }

 function Bar(){
  echo "this is bar";
 }
}
$foo=new Foo();
$funName= "Variable";
$foo->$funName();