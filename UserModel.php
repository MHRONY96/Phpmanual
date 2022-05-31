<?php

namespace UserModel {
 class User
 {
  public function __construct()
  {
   echo "I am in" . " " . __CLASS__ . "<br/>";
  }

  public function showData()
  {
   echo "I am in" . " " . __METHOD__ . "<br/>";
  }
 }

 $obj = new User;
 $obj->showData();
 echo __NAMESPACE__;
}
