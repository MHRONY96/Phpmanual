<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);
$arr = array(1, 2);
$count = count($arr);
for ($i = 0; $i < $count; $i++) {
 echo $i;
}

$error_descriptions[E_ERROR]   = "A fatal error has occurred";
$error_descriptions[E_WARNING] = "PHP issued a warning";
$error_descriptions[E_NOTICE]  = "This is just an informal notice";
