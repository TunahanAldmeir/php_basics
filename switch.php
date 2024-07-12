<?php

//Switch

$paymenytstatus = 'paid';

switch ($paymenytstatus) {
    case 'paid':
        echo 'Paid';
        break;
    //you can both 
    case 'declined':
    case'rejected':
        echo 'wrong';
        break; // you specify the how many loops you wanna break like this break 2;
    default:
        echo 'No match found';
}

//_______*QA* Whats the difference between switch and elseif_________//