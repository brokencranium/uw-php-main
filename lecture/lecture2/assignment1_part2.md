Assignment 1 - Part 2
============
This is part 2 of assignment 1 (https://github.com/jayzeng/UW-PHP-course/blob/master/lecture/lecture1/assignment1.md). We now have a simple OO solution, let's make it more real-world. This time, you need to:

- Set up basic project skeleton
- Set up namespace for every class
- Autoloading
- Implement unit tests for every public method
- Generate test coverage, you should try to challenge yourself to get 100% code coverage for this
simple project.

Now, the project should look like:
```
- Src/
    - Vehicle.php
    - VehicleInterface.php
    - Car.php
    - Civic.php
    - Truck.php
- Tests
    - Conf
        - phpunit.xml
    - Src/
        - VehicleTest.php
        - CarTest.php
        - CivicTest.php
        - TruckTest.php
- Bootstrap.php   takes care autoloading
- composer.json   Sets up autoloading, dependency (phpunit)
- README.md       What this project is, how to run composer to install dependencies, how to run unit tests
```

Due day?
============
Part 1 is due on Sunday January 19th, 2013.
Part 2 is due on Sunday January 26th, 2013

How to submit your code:
============
You have three options to submit your solution:
- Submit your files through course website (moodle)
- Zip up your files and email to Jay Zeng (jayzeng@jay-zeng.com) and Curtis Jurgensen (curtisj44@gmail.com)
- Create a (private or public) repository on Github, send me the url of your repository (You will get bonus point!)
