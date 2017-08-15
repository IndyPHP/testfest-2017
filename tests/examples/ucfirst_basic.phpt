--TEST--
Test function ucfirst() by calling it with its expected arguments
--FILE--
<?php

$str = 'hello';

echo ucfirst( $str );

?>
--EXPECT--
Hello
