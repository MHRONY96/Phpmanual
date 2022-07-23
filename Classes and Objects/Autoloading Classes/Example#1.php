<?php
spl_autoload_register(function ($class_name) {
 include $class_name . '.php';
});

$obj = new MyClass1();
$obj1 = new MyClass2();
