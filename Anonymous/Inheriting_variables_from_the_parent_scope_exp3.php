<?php
$message="Hello";
// No "use"
// $example=function(){
//  var_dump($message);
// };

// $example();

// Inherit $message
$example=function() use($message){
var_dump($message);
};

$example();

// Inherited variable's value is from when the function
// is defined, not when called
$message="world";
$example();
// Reset message
$message="Hello";
$example=function() use(&$message){
 var_dump($message);
};
$example();

// The changed value in the parent scope
// is reflected inside the function call
$message = 'world';
$example();

// Closures can also accept regular arguments
$example=function($arg) use($message){
 var_dump($arg.' '.$message);
};
$example("Hello");

// Return type declaration comes after the use clause
$example= function() use($message):string{
 return "hello $message";
};
var_dump($example());