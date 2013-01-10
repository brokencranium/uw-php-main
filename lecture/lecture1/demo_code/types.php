<?php

// how to declare variable
$user = 'John';

//echo $user;

function foo( $a ) {
    return $a;
}

print "a"."b"."c" . PHP_EOL;

// echo/print
// \n\r
print foo( $user ) . PHP_EOL;

// object
class myFoo
{
    public $a = 'abc';
}

$myfoo = new myFoo();
$myfoo2 = new myFoo();
var_dump($myfoo);
var_dump($myfoo2);
?>
