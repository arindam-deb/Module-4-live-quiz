<?php

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "My name is {$this->name} and I am {$this->age} years old.";
    }
}

$person = new Person("John", 30);
$person->introduce();
