Assignment 1
============
The core focus of this assignment is to help you gain a deeper understanding of OO (object oriented).

                    Vehicle
                   /      \
                Car       Truck
                /
             Civic

```php
<?php
/**
 * Abstract class to represent vehicle
 */
abstract class Vehicle
{
    /**
     * Number of doors
     * @var int
     */
    protected $_numberOfDoors;

    /**
     * Return the number of doors
     * @return int
     */
    abstract public function getNumberOfDoors();
}
?>
```

What do you need to do?
============
- Implement Three sub-classes: Car, Civic and Trunk. They should all implement the base class Vehicle
- Declare an interface named VehicleInterface, with a method called honk().
- For each of the sub-class
    - Provide getYear() and setYear() methods that allow client code to set/get year
    - Implment the honk() in VehicleInterface
        - Car and Trunk class will return an empty string
        - Civic will return a string 'honk honk'

You are welcome and encouraged to make your classes more real-world by providing more functionalities and/or
have other objects to represent other types of vehicles.

In the end, you should (at least) have the following files:
- Vehicle.php
- VehicleInterface.php
- Car.php
- Civic.php
- Trunk.php
- README.md

Note:
- Each class should have a high level class doc that documents what this class does
- Each method (regardless whether it is public/protected/private) should have a method docblock

How to submit your code:
============
You have two options to submit your solution:
- Zip up your files and email to Jay Zeng (jayzeng@jay-zeng.com) and Curtis Jurgensen (curtisj44@gmail.com)
- Create a (private or public) repository on Github, send me the url of your repository (You will get bonus point!)