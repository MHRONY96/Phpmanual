<?php
function add_some_exits(&$string){
  $string.=" add some string";

}
$str="This is a string";
add_some_exits($str);
echo $str."<br/>";

function makeCoffee($type="cappuccino"){
 return "Making a cap of $type.<br/>";
}

echo makeCoffee();
echo makeCoffee(null);
echo makeCoffee("espresso");

// Using non-scalar types as default values

function coffeeMake($type=["cappuccino"], $coffeeMaker=null){
 $device=is_null($coffeeMaker)?"hand":$coffeeMaker;
 return "Making a Coffee of"." ".join(",",$type)." "."with $device.<br/>";
}

echo coffeeMake();
echo coffeeMake(["cappuccino","lavazza"],"teapot");

// Using objects as default values (as of PHP 8.1.0)
// class DefaultCoffeeMaker {
//     public function brew() {
//         return 'Making coffee.';
//     }
// }
// class FancyCoffeeMaker {
//     public function brew() {
//         return 'Crafting a beautiful coffee just for you.';
//     }
// }
// function makecoffee($coffeeMaker = new DefaultCoffeeMaker)
// {
//     return $coffeeMaker->brew();
// }
// echo makecoffee();
// echo makecoffee(new FancyCoffeeMaker);

// Accessing variable arguments in old PHP versions
function sum(){
 $acc=0;
 foreach (func_get_args() as $n) {
  $acc +=$n;
 }
 return $acc;
}

echo sum(1,2,3,4);
