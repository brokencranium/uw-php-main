<?php

class demo
{
    private $foo = 'bar';

    protected $protectedFoo = 'protected bar';

    public $publicFoo = 'public foo';

    public function getBar() {
        return 'bar';
    }
}

class myDemo extends demo
{
    public function getProtecedFoo() {
        return $this->protectedFoo;
    }

    public function getMyBar() {
        return 'my bar'. $this->getBar();
    }

    public function getBar() {
        $bar = parent::getBar();
        return 'another bar' . $ba;
    }
}

?>
