<?php

function foo(): void
{
    return;
}

//var_dump(foo());

function fooa(...$numbers): int|float
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

//echo fooa(1, 2, 35, 45);


//variables, anonymous, arrow functions;

function sum(int|float...$numbers): int|float{
    return array_sum($numbers);
}

$z = 'sum';

if (is_callable($z)) {
    echo $z(1,2,3,4,5);
}   
else{
    echo 'Function is not found';
}
echo "\n";
$x=10;
$sum =function (int|float...$numbers) use($x): int|float{
    echo $x;
    return array_sum($numbers);
   };

echo $z(1,2,3,4,5);
$array =[1,2,3,4,5];

$array2 = array_map(function($element){
    return $element*2;

},$array);
echo '<pre>';
print_r($array);


print_r($array2);

echo '</pre>';

$arr=[1,2,3,4,5];

$arr2 = array_map(fn($number)=>$number*$number, $arr); //arrow functions
echo '<pre>';
print_r($arr2);
echo '</pre>';

