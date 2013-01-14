<?php
// type - array
// array in PHP is the most powerful data structure
// it can be used as:
// - array
// - list (vector)
// - hash table (a version of map)
// - dictionary
// - collection
// - stack
// - queue

// indexed array. When key is not specified, php internally
// appends an index to each element to keep track of the array
var_dump( array( 1, 2, 'hello world', array(), array('oops') ) );

// you can alos put objects inside
$fooObj = new stdClass();
var_dump( array($fooObj) );

// but you can't use object as the key, it will produce syntax error
var_dump( array( $fooObj => 'abc' ) );

// You can use int, float or string as the key to consutrct
// associated array. Note: flaat will be internally type casted as int
var_dump( array(1.1 => 'hello world', 3.4 => 'oops' ) );

// note the 1st element will be overriden by the 2nd element
var_dump( array( 5 => 1, 5=> 2, 3 => 'abc', 4 => 1 ) );

// array de-referencing (only available in PHP 5.4, or it will give you syntax error)
//echo array(1, 2, 3)[0]; // prints out 1

// in 5.3 or prior
$foo = array(1,2,3);
echo $foo[0];           // prints out 1

// array functions, see http://php.net/manual/en/ref.array.php
?>
