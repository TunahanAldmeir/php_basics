<?php

//error reporting

var_dump(ini_get('error_reporting'));
var_dump(E_ALL); //reposts all the errors


var_dump(ini_get('memory_limit')); //512MB

$string ='x';


for ($i = 0; $i < 0; $i++) {
    $string .= $string;
}

//echo $string;

//error handeling

//error_reporting(0); //there will no errors 


trigger_error('Example is wrong', E_USER_WARNING); //Trigger errors manually
echo 1;


//eror handeling

function errorHandler($errno, $errstr, $errfile = null, $errline=null) {
    echo $errno . ':' . $errstr . 'in' . $errfile .'on Line'. $errline;
    exit;

}

set_error_handler('errorHandler', E_ALL);


echo $a;


