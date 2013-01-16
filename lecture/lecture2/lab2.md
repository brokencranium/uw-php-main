Lab 2
============
This lab contains two parts:

Part 1:
============
PHP provide isset() and empty() to detect whether a variable is empty or isset, but it is very confusing. Let's implement a
String utility object (with namespace Util) with a function named isNullOrEmpty() (yes, I steal it from C# :) ). For simplicity reason, this function
only accepts string and any other data type will not be accepted (an InvalidArgumentException will be thrown)

```
/**
 * Is input string null or empty?
 * @param string $value
 * @return boolean
 */
public static function isNullOrEmpty( $value ) {

}
```

```php
StringUtil::isNullOrEmpty( null ); // returns true
StringUtil::isNullOrEmpty( '' ); // returns true
StringUtil::isNullOrEmpty( 'abc' ); // returns false
StringUtil::isNullOrEmpty( 1243 ); // returns false
StringUtil::isNullOrEmpty( array() ); // expects InvalidArgumentException
```

Part 2:
============
Set up basic PHP application skeleton, create the following folders & files and commit your solution to your repository.

Project:
- Src
    - Util/StringUtil.php
- Tests
    - Util/StringUtilTest.php
- composer.json                  Defines basic application information, indicate phpUnit as dependecy.
- bootstrap.php                  This file set ups autoloading to trigger
