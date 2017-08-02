
<?php
// Works as of PHP 5.3.0
const CONSTANT = 'Hello World';

echo CONSTANT;
echo "\n";
// Works as of PHP 5.6.0
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;
echo "\n";
const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // outputs "cat"
echo "\n";
?>
