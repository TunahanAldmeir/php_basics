<?php
//classes and objects
class Person
{
    public string $name;
    public int $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getPersonInf()
    {
        echo $this->name . ' ' . $this->age . ' yaşındadır.' .'<br />';
    }

}