<?php
//Operators

$s = 0;

$y = $s ?? 'hello';


echo $y;

//comporasian operator

$x =5;
$y = 10;

var_dump( $x == $y ); // returs false 

var_dump( $x <> $y ); // not equel

var_dump( $x === $y ); // is not automate the conversion its stricts

var_dump( $x != $y ); // not equel

var_dump( $x <=> $y ); // 0, 1, -1 returns

var_dump( 0=='hello' ); //
$x= "Hello";
$y =strpos($x,'e'); // inside the x 

$result = $y ==false ?  'H not found' : 'e is found';    

echo $result;
$x= null;

$y= $x ?? 'Hello'; // if x is null returns Hello 

echo $y;


//Eror control operators

$x= file('foo.txt');

//incremental +- operators

$x=10;

echo $x++; //returned 10;

echo ++ $x; // returned 11

//logical operators

$x= 0;
$y = 1;

var_dump(!$x || $y ); //and ! is not
var_dump( $x && $y ); // or













