<?php
// create a sample array
$arr = [1, 2, 3, 4, 5, 6];
print_r($arr);
// Now delete every item, but leave the array itself intact:
foreach ($arr as $key => $value) {
 unset($arr[$key]);
}
print_r($arr);

// Append an item (note that the new key is 5, instead of 0).
$arr[] = 7;
$arr[] = 9;
print_r($arr);

// Re-index:
$arr = array_values($arr);
$arr[] = 8;
print_r($arr);
