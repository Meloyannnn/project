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


class Person {
    public $name;
    public $age;
    public $surname;
    public $gender;

    public function about($name, $age,$surname,$gender){
        $this->name = $name;
        $this->age = $age;
        $this->surname = $surname;
        $this->gender = $gender;
    }
}

$tom = new Person();
$tom->about("Mike", 16,"White","male");

echo $tom->name."-". $tom->age."-". $tom->surname."-". $tom->gender; 