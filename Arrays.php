<?php

//Arrays

$programingLanguages = ["Python", "C#", "Php", "R", "Java"];

echo $programingLanguages[0];
echo count($programingLanguages);


array_push($programingLanguages,'a','b','c');

echo '<pre>';
echo $programingLanguages[6];
echo '<pre/>';

$programingLanguages1 = [
    'php'=> '8.0'
];

echo $programingLanguages1[0];