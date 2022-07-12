<?php
class BaseClass
{
 function __construct()
 {
  printf("In the base Construct\n");
 }
}

class SubClass extends BaseClass
{
 function __construct()
 {
  parent::__construct();
  printf("In the Sub Class\n");
 }
}

class OtherClass extends BaseClass
{
}
$obj = new BaseClass();
$obj1 = new SubClass();
