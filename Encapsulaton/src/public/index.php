<?php

require_once '../Classes/static.php';
require_once '../Classes/Db.php';
require_once '../Classes/Encapsulation.php';

$transaction = new Transaction(15,'Money');
$transaction = new Transaction(15,'Money');
$transaction = new Transaction(15,'Money');
$transaction = new Transaction(15,'Money');
$transaction = new Transaction(15,'Money');
$transaction = new Transaction(15,'Money');


//var_dump(Transaction::getCount());

//Static constructur

$db =  Db::getINstance([]);
$db =  Db::getINstance([]);
$db =  Db::getINstance([]);
$db =  Db::getINstance([]);


//  Factory Pattern craates objects of other classes // use implement to static methods use '::' to acces static methods 
//use static methods to make certian variable inaccessible

//$transaction =  TransactionFactory::make(25, 'Transaction 1'); 
//________________________________________________________use reflection api to acces private properties________________________\\
$transaction = new TransactionE(25);
$reflectionProperty = new ReflectionProperty(TransactionE::class,'amount');
$reflectionProperty->setAccessible(true);
//Seeting the value of private property 
$reflectionProperty->setValue($transaction,125);
var_dump($reflectionProperty->getValue($transaction));

$transaction->procses();

