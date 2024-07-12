<?php

//DataTypes

#bool
$isactive = true;

#int
$age = 24;

#float
$price = 1.99;

#string
$opetext = "Hello";


echo  $isactive . '<br />';
echo  $age . '<br />';
echo  $price . '<br />';
echo  $opetext . '<br />';

//get the types of variabale
echo gettype($opetext); // it returned string
echo var_dump($price);  // it returned float getr far more info 


//Array 
$compony=[1,2,3,'A', -1, 'b', true];

print_r($compony); // you cant print an array with echo 

function sum(int $x, int $y ){ // type hint
    return $x + $y; 
}

echo sum(1,1); // type cohesion

//strict types

declare (strict_types= 1); // it cancels the cohesion you need to specify top of the function   

//type casting 

$reel = (int) '2';

echo $reel; // result int(5)







