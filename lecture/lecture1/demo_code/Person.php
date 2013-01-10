<?php

/**
 * This object is to represent Person
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

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getAge() {
        return $this->age;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress( $addr ) {
        $this->address = $addr;
    }
}

$person = new Person( 'Jay', 'Zeng', 50, 'somewhere' );
var_dump( $person->getFirstName() ) . PHP_EOL;
var_dump( $person->getLastName() ) . PHP_EOL;
var_dump( $person->getAge() ) . PHP_EOL;
var_dump( $person->getAddress() ) . PHP_EOL;

$person->setAddress('a new home');
var_dump( $person->getAddress() ) . PHP_EOL;
?>
