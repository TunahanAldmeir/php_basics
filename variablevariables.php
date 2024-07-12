<?php

//variable variables bar=baz

$foo = 'bar';

$$foo = 'baz';

echo $foo , $$foo ; //prints bar, baz