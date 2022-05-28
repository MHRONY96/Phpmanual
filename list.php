<?php
$info=array("coffee","brown","caffeine");
list($drink,$color,$power)=$info;
echo "$drink is $color and $power makes it special.\n";

// Listing some of them
list($drink,$power)=$info;
echo "$drink has $power.\n";

// Or let's skip to only the third one
list( , , $power) = $info;
echo "I need $power!\n";

// list() doesn't work with strings
list($bar) = "abcde";
var_dump($bar); // NULL

// $result=$pdo->query("SELECT id, name FROM employees");
// while (list($id,$name)=$result->fetch(PDO::FETCH_NUM)) {
//  echo "id: $id, name: $name\n";
// }

list($a, list($b, $c)) = array(1, array(2, 3));

var_dump($a, $b, $c);

$data=[["id"=>1,"name"=>"Rony"],["id"=>2,"name"=>"mim"]];

// foreach ($data as ["id" => $id, "name" => $name]) {
//     echo "id: $id, name: $name\n";
// }
// echo PHP_EOL;
// list(1 => $second, 3 => $fourth) = [1, 2, 3, 4];
// echo "$second, $fourth\n";

if($a==5):
    echo "a equals 5";
    echo  "...";
elseif($a==6):
    echo "a equals 6";
    echo "!!!";
else:
    echo "a is neither 5 nor 6";
endif;