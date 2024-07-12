<?php

//Floats

$x = 12.2;
$y = floor((0.5 +0.5)*10); // ceil() is opposite
echo $y;
echo $x;

echo log(-1); // prints NAN

echo PHP_FLOAT_MAX+1 ; // just returns INF

var_dump(is_infinite(PHP_FLOAT_MAX+1)); //Chexk is it infinite
