<?php

// Function which prints "Hello I am Zura"

// function hello()
// {
//     echo "Hello";
// }

// hello();
// hello();
// hello();

// Function with argument

function hello($name)
{
    echo "Hello $name".'<br>';
}
hello("Zura");
hello("Z");
// Create sum of two functions

// function sum($a, $b){
//     return $a + $b;
// }
// echo sum(5, 10);

// Create function to sum all numbers using ...$nums
// function sum(...$nums){
//  $sum = 0;
//  foreach($nums as $n){
//     $sum += $n;
//  }
//  return $sum;
// }

// echo sum(1,2,3,5,8,9,64,4);

// Arrow functions
function sum(...$nums){
    return array_reduce($nums, fn($carry, $n) => $carry 
    + $n);
}

echo sum(1,2,3,5,8,9,64,4);