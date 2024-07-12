<?php

declare(strict_types = 1);

// Your Code


//read the files from directory

function getTransacitonFiles(string $dirPath): array{
    $files = [];

    foreach(scandir($dirPath) as $file){
        if(is_dir($file)){
            continue;
        }
        $files[] = $dirPath . $file;
    }
      return $files;
}

function gettransactions(string $filename): array   {
    if(!file_exists($filename)){
        trigger_error('File' .$filename. "does not exist",E_USER_ERROR);
    }
    $file = fopen($filename,"r");
    fgetcsv($file);
    $transactions = [];

    while(($transaction = fgetcsv($file)) !== false){
        $transactions[] = TransactionExtract($transaction);
      }
    return $transactions;

}

// Organize the text
function TransactionExtract(array $transactionRow): array {
    [$date, $checkNumber,$description, $amount] = $transactionRow;
    $amount =str_replace(['$',','],'',@$amount);
    return [
        'date'=> $date,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount' => $amount
    ];
}