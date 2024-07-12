<?php

//strict comparasion is active here
$isactive = 1;
match($isactive) {
    1 => print "paid",
    2,3 => print 'payment declined',
    default => 'value does not matched',
};