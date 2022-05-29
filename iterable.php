<?php
function foo(iterable $iterable)
{
 foreach ($iterable as $value) {
 }
}

function bar(): iterable
{
 return [1, 2, 3];
}

function gen(): iterable
{
 yield 1;
 yield 2;
}
// $$a = 'world';
// echo "$a ${$a}";
