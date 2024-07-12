<?php

//date timezone

echo time(); // gives us current time 

echo date("m/d/Y g:ia"); // formatted date and time

date_default_timezone_set("UTC"); // GET UTUC timezone

date_default_timezone_get(); // get current timezone

echo date('m/d/Y g:ia', strtotime('2012-01-18 07:00:00')); // formatted the timestamp
echo date('m/d/Y g:ia', strtotime('first day of year')); // formatted the timestamp
$date = date('m/d/Y g:ai', strtotime('last day of february 2020 ')); // formatted the timestamp


//__ParsingDate__//
echo '<pre>';
print_r(date_parse($date));
echo '</pre>';


//_parsegivingformat_//

echo '<pre>';
print_r(date_parse_from_format('m/d/Y g:ia',$date));
echo '</pre>';
