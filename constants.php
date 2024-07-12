<?php

//define constants

define("STATUS_PAID","paid");

echo  STATUS_PAID;

const STATUS_PAID = "paid";

//dynamic define  ask for help 

$paid = "PAID";
define('STATUS_' . $paid, $paid);

echo STATUS_PAID;


// control for constants defined

echo defined("STATUS_PAID");

//diffarance I cant use const here

if(true){
    define("STATUS_PAID", 9);
}

//pre defined constants

echo PHP_VERSION; 

//Magic Constant

echo __LINE__;
echo __FILE__;

