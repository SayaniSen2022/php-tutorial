<?php

// while

// Loop with $counter

// do - while

// for

// foreach
$fruits = ["Apple", "Orange", "Banana"];

foreach($fruits as $i => $fruit){
    echo $i.' '.$fruit.'<br>';
}

// Iterate Over associative array.

$person = [
    'name' => 'Traversy',
    'surname' => 'Brad',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];

foreach($person as $key => $value){
    if(is_array($value)){
        echo $key.' '.implode(",", $value). '<br>';
    }else{
        echo $key . ' ' . $value . '<br>';
    }
}