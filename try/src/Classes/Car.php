<?php

//abstraction
abstract  class Car
{
    public function __construct($name,$color){}
    public function getCarInf(){}

}



class  ManageCar extends Car
{
    public string $name;
    public string $color;
    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }
    public function getCarInf()
    {
        echo  $this->color . ' ' . $this->name .'<br />';
    }

}