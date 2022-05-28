<?php
//Example #2 Returning an array to get multiple values
function small_numbers(){
 return [0,1,2,3];
}
// [$zero,$one,$two,$three] = small_numbers();
// [$zero, $one, $two, $three] = small_numbers();
list($zero,$one,$two,$three)=small_numbers();

// Example #3 Returning a reference from a function

function &returns_reference(){
 return $someref;
}
$newref=& returns_reference();