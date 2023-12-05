<?php

// Declaring numbers
$a = 5;
$b = 6;

// Arithmetic operations

//echo ($a + $b) * $a. '<br>';

// Assignment with math operators

//$a += $b; echo $a;

// Increment operator
echo $a++ . '<br>';
echo ++$a . '<br>';

// Decrement operator
echo $a-- . '<br>';
echo --$a. '<br>';

// Number checking functions
is_float(1.25); //true
is_int(5); //true
echo is_numeric(6). '<br>'; //1 stands for true
echo is_numeric("345"). '<br>'; //1 stands for true
echo is_numeric("3gg45"). '<br>'; //false

// Conversion
$strNumber = '12.44';
$number = (int)$strNumber;
$number = floatval($strNumber);
var_dump($number);

// Number functions

// Formatting numbers
echo '<br>';
$number = 1234568.212354;
echo number_format($number, 2, '.', ',');

// https://www.php.net/manual/en/ref.math.php
