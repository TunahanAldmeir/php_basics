<?php
include 'helpers.php';
$items=['a'=> 1,'b'=> 2,'c'=> 3,'d'=> 4];

prettyPrintArray(array_chunk($items,2));
prettyPrintArray(array_chunk($items,2,true)); // if you wanna protect the keys


/*Array Combine 
-size must be equel
*/

$array1 = [5,7,8];
$array2 = [5,10,15];

prettyPrintArray(array_combine($array1,$array2));


//Array Filter

$array = [1,2,3,4,5,6,7,8,9];


$even = array_filter($array, fn($number)=> $number %2 ===0); 

prettyPrintArray($even);


//array_map 
$array= [1,2,3,4,5,6,7,8,9];

$array = array_map(fn($number) => $number*2, $array);  
prettyPrintArray($array);

$array   = [1,2,3,4,5,6,7];
$arrays2 = [1,2,3,4,5,6,7];

$array = array_map(fn($number,$numbers1) => $number + $numbers1, $array, $arrays2);

prettyPrintArray($array);


//Array Merge

$array1 = [1,2,3,4,5,6];
$array2 = [1,2,3,4,5,6];
$array3 = [1,2,3,4,5,6];

$merged = array_merge($array1,$array2,$array3);/// its merging the arrays any given numbers
prettyPrintArray($merged);


//Array Reduce

$invoiceItems =[
    ['price'=>9.99 ,'qty'=> 3,'desc'=> 'item1'],
    ['price'=>9.98 ,'qty'=> 5,'desc'=> 'item2'],
    ['price'=>9.97 ,'qty'=> 4,'desc'=> 'item3'],
    ['price'=>9.95 ,'qty'=> 7,'desc'=> 'item4'],
    ['price'=>9.94 ,'qty'=> 8,'desc'=> 'item5'],
];

$total = array_reduce($invoiceItems,
 fn($sum, $item) => $sum + $item['qty']* $item['price']
);

echo $total, "\n";



//Array Search

$arrayt=[1,2,3,4,5,6,7];

$key = array_search('1',$arrayt);

if(in_array(1,$arrayt)){
    echo 'the letter is found this location', ': ' ,$key;
}
else{
    echo 'Number is not found';
}

//find the differrance between arrays


$arrayt=[1,2,3,4,5,6,7,75];
$array = [1,2,3,4,5,6,7,8,9];
$arrayr =[1,5,8,7,10,11,22,23];

prettyPrintArray(array_diff($arrayt,$arrayr,$array)); //____compare to first array to with rest of the array
echo "\n";
prettyPrintArray(array_diff_assoc($arrayt,$arrayr,$array)); //___its compare keys 
ksort($arrayt);// sort the keys
asort($arrayt);//sort the values
prettyPrintArray($arrayt);





