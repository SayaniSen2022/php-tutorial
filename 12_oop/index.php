<?php

// What is class and instance

class Person {
    public $name;
    public $surname;
    private $age;
    public static $counter = 0;

    public function __construct($name, $surname)
    {
      
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;

    } 
    
    
    public function setAge($age)
    {
      $this->age = $age;

    }
    public static function getCounter(){
        return self::$counter;
    }
}

$p = new Person("B", "tt");

// $p->name = 'Brad';
// $p->surname = 'Traversy';

echo '<pre>';
var_dump($p);
echo '</pre>';

echo $p->name.'<br>';
echo $p->surname.'<br>';

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter