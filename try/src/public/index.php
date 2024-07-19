<?php

require_once "../Classes/Person.php";
require_once "../Classes/Car.php";
require_once "../Classes/User.php";
require_once "../Classes/Book.php";
//object
$person = new Person("Tunahan",25);
$car = new ManageCar("Ferrari","Red");
$user = new User("Tunahan","1234");
$person->getPersonInf();

$car->getCarInf();

$user->getUserName();
$user->setUserName("AhmetArif");

$book= new Book("Ferrari","Red");

$ebook = new EBook("Ferrari1","Red1","yazılı");

$book->getTitle();
$ebook->getTitle();
$ebook->getFormat();



