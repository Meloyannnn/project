<?php

//     class Person{
//         public $age;
//         public $name;
//     }

// $person = new Person();
// $person->name = "Narek";
// $person->age = 16;

// echo $person->name . " - " . $person->age . "<br>";


// $person1 = new Person();
// $person1->name = "Armine";
// $person->age = 16;

// echo $person1->name. " - " . $person->age ;


// homework 1 
class Person {
    public $name;
    public $age;

    public function func($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

$armine = new Person();
$armine->func("Narek", 16);

echo $armine->name; 