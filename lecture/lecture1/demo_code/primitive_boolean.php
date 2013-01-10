<?php

// Primitive types - boolean

// scalar types
$foo = true;
$foo = false;

// true and false are case insensitive,
// Note: You should be consistent through out your code
// in terms of case sensitivity
$foo = TRUE;
$foo = FALSE;

// PHP's definition of FALSE
// false, (int) 0, (float) 0.0, (string) '0', '', array(), null
// Let's prove it!

// should print out (boolean) false for all these cases
foreach( array( 0, 0.0, '0', '', array(), null, "" ) as $falseVal ) {
    var_dump( (bool)$falseVal );
}

// Have a line break to increase readability
echo str_repeat('-', 10);
echo PHP_EOL;

// declare an empty object
// stdClass is the default PHP object with no properties, methods or parent
// it does not support magic methods, and implements no interfaces
$emptyObj = new stdClass();

// resource (@see http://php.net/manual/en/language.types.resource.php and http://php.net/manual/en/resource.php)
// is also considered as true

// in this case, we expect all these cases to be considered as true boolean
foreach( array( 1, 0.1, '1', '2', array('a'), array('abc' => 'hello'), array($emptyObj), $emptyObj ) as $falseVal ) {
    var_dump( (bool)$falseVal );
}

?>
