<?php

/*STRINGS*/

$firstname = 'Tunahan';
$lastname ="Aldemir"; // you can use variable inside the double quotes


$firstname[-1] = 'k';

echo $firstname; // print out Tunahak

//heredoc
$text = <<<TEXT
LİNE 1 $firstname
LİNE 2
LİNE 3
TEXT;

echo nl2br($text);

//novodoc
// You cant use variables inside novodoc version
$text2 = <<< 'TEXT'
LINE 1
LINE 2
LINE 3

TEXT;

echo nl2br($text2);

//another usage
$text = <<<TEXT
<div>
<p>
Hello My Friend
</p>
</div>
TEXT;

