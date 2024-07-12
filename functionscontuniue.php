<?php

function sum(...$numbers):int|float{
    $sum = array_sum($numbers);
    return $sum ;
}

$x = 'sum';

if(is_callable($x)){
    echo $x(1,2,3) , "\n";
}
else{
    echo 'function is not found';
}

//anonymous function have local scope
$sum = function (...$numbers):int|float{
    $sum = array_sum($numbers);
    return $sum ;
};

echo sum(1,2,3,4,5,6);

$sum =function (int|float...$numbers) use($x): int|float{ // if you wanna acces outside the local scope you need yo 'use' keyword
    echo $x;
    return array_sum($numbers);
   };

echo sum(1,2,3,4,5,6);


$array =[1,2,3,4,5];

$array2 = array_map(function($element){
    return $element*2;

},$array);
echo '<pre>';
print_r($array);



