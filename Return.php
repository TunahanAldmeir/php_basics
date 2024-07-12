<?php

//Return / declare / goto

function sum($x,$y){
    return $x+$y;
}



//declare---tick

$x=3;
$y=5;
$z= $x + $y;

function onTick(){
    echo 'Tick<br/>';
}

register_tick_function('onTick');

declare(ticks=1);

$i = 0;
$lenght = 10 ;

while($i< $lenght){
    echo $i++ .'<br />';
}
