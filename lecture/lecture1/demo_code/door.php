<?php
require_once('doorInterface.php');

abstract class Door implements doorInterface
{
    abstract public function isAwesome();
}

class myDoor extends Door
{
    public function isAwesome() {
        return 'hello';
    }
}

$door = new myDoor();
var_dump($door->openable());
var_dump($door->isAwesome());

?>
