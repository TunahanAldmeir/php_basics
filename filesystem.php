<?php

$dir = scandir(__DIR__); //acces the current directory

var_dump(is_file($dir[2])); //check if its a file or not

mkdir("foo"); // create directory

rmdir("foo");

file_put_contents('text.text','Hello'); //write the context inside of text


$file =fopen('text.text','r'); //open file for reading

while (($line = fgets($file)) !== false){
    echo $line . '<br/>';
}

fclose($file);


file_put_contents('bar.txt','Hello world'); // creates file and puts text in it

//delete files 

unlink('bar.txt');

copy('text.text','bar.txt');


