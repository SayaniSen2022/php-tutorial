<?php

$age = 20;
$salary = 300000;

// // Sample if

// if($age === 20){
//     echo "1";
// }

// // Without circle braces
// if($age === 20) echo "1";

// // Sample if-else

// if($age > 20){
//     echo "1";
// }
// else {
//     echo "2";
// }

// Difference between == and ===....== only values are compared. === type check

if($age == 20){
    echo "1". '<br>'; //1
}
if($age === '20'){
    echo "2". '<br>'; //2
}

// if AND

// if OR

// Ternary if
echo $age < 22 ? 'Young' : 'Old';

// Short ternary
$myAge = $age ?: '18';
echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator

isset($name) ? $name : 'John';
$myName = $name ?? 'John';

// switch
$userRole = 'admin';
switch($userRole){
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Inavalid Role';
}
