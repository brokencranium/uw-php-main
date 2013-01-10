<?php
require_once 'object.php';

$new = new myDemo();

// access private variable
var_dump($new->foo);

// access protected variable
var_dump($new->getProtecedFoo());

// access public var_dump
var_dump($new->publicFoo);

//var_dump($new->getMyBar());
var_dump($new->getBar());

$demo = new demo();
var_dump( $demo->getBar() )

?>
