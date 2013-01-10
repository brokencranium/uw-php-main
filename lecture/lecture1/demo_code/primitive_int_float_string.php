<?php

// primitive types
// string, int and float (aka double in PHP)

// int
$foo = 123;

// interesting note
// Depends on whether your machine is 32 or 64bit, PHP will overflows

// If you are running a 32bit machine

// 2147483647 = pow(2, 31) - 2^0
var_dump(2147483647); // int(2147483647)
var_dump(2147483648); // float(2147483648)

// If you are running a 64bit machine
// 9223372036854775807 = pow(2, 63) - 2^0
var_dump(9223372036854775807); // int(9223372036854775807)
var_dump(9223372036854775808); // float(9.2233720368548E+18)

var_dump( 4/3 ); // float 1.333
var_dump( round( 4/3) ); // float 1.333

// string
// single quote, double quote do the exact same thing
// Someone argues single quote is faster than double quote
// There is micro differences, but you shouldn't care.
echo 'this is a string';
echo PHP_EOL;

echo "this is a string";
echo PHP_EOL;

// The real difference between single quote and double quote:
$foo = 'hello world';
echo 'say '. $foo;
echo PHP_EOL;

// single quote won' render variable this way,
// it is stricer than double quote. I personally recommend to
// use single quote for string concatenation
echo 'say $foo';     // note this won't print say hello world
echo PHP_EOL;

echo "say $foo";     // this will print say hello world
echo PHP_EOL;

// another way to render variable is to use {}
echo 'say {$foo}';
echo PHP_EOL;

echo "say {$foo}";
echo PHP_EOL;

// heredoc
echo <<<EOD
this is a very very
very very very very
long string
EOD;

// identifier after <<< can be any string
// as long as it matches what it is used
// to close the string
echo <<<oops
la la la
la la la
la la la
oops;
?>
