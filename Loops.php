<?php
//LOOPS

//WHİLE
$s= 0;
while ($s <15 ) {
    $s++;
}
while (true){
    if ($s <15 ) {
        break;
    }
    $s++;
}

while (true){
    while($x<15){
        break 2; // it cancels two loops   
    }
    $i++;   
}

while ($x<15){
    if( $i %2 ===0) {
        $x++;
        continue;// it will pass if 10%2 is zero
    }
    echo $x++ , ' ';
}
//different use of while inside the html
while ($x<15):
    if( $i %2 ===0) {
        $x++;
        continue;// it will pass if 10%2 is zero
    }
    echo $x++ , ' ';
endwhile;

//do while
$i = 0;
do{
    echo $i++;
}while ($i < 15);


//________for loops_______//
for( $y= 0; $y < 0; $i++){
    echo $i ;
}



//__________-foreach___________//
$programinglanguages = ['html', 'PHP', 'python', 'c'];

foreach($programinglanguages as $key=> $language){ // &$language if you wanna change the arrays values
    echo $key, $language ,'<br />';
}    

print_r($programinglanguages);


$user = [
    'name' => 'Tunahan',
    'emil'=> 'tunahanaldemir46@gmail.com',
    'skills' =>['php','html', 'mvc'],
];

foreach($user as $key => $value){   
    echo $key , json_encode($value) ,'<br />'; // you can use implode intead of json_encode if you are certian the value is array.
}

//different use of foreach inside of html

foreach($user as $key => $value):
    echo $key , json_encode($value) ,'<br />'; // you can use implode intead of json_encode if you are certian the value is array.
endforeach;





