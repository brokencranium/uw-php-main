<?php

/**
 * This object is to represent Person
 * Magical version!
 * (Magic can be dangerous )
 */
class Person
{
    /**
     * @var String
     */
    private $firstName;

    /**
     * @var String
     */
    private $lastName;

    /**
     * @var Int
     */
    private $age;

    /**
     * @var String
     */
    private $address;

    /**
     * Constructor
     * @param $fName   string - first name
     * @param $lName   string - first name
     * @param $age     int    - first name
     * @param $address string - first name
     */
    public function __construct( $fName, $lName, $age, $address ) {
        $this->firstName = $fName;
        $this->lastName  = $lName;
        $this->age       = $age;
        $this->address   = $address;
    }

    public function __get( $name ) {
        return $this->$name;
    }

    /**
     * @param $name  string  method name
     * @param $args  array   method arguments
     */
    public function __call( $name, $args ) {
        if( substr($name, 0, 3) === 'get' ) {
            // make variable lower case so it supports
            // getAge() and getage()
            $varName = strtolower( substr( $name, 3 ) );
        }

        return $this->$varName;
    }

}

$person = new Person('Jay', 'Zeng', 50, 'somewhere');
echo $person->age . PHP_EOL; // echo out private property

echo $person->getAge() . PHP_EOL; // or through a getter.

echo $person->getAddress() . PHP_EOL;
