<?php
class Test{
 public function Testing(){
  return function(){
   var_dump($this);
  };
 }
}
$obj= new Test;
$function=$obj->Testing();
$function();