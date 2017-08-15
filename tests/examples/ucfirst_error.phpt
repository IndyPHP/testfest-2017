--TEST--
Test function ucfirst() by calling it more than or less than its expected arguments
--FILE--
<?php

$str = 'hello';
$extra_arg = 'whoops';

echo ucfirst( $str, $extra_arg );

?>
--EXPECTF--
Warning: ucfirst() expects exactly 1 parameter, 2 given in /usr/src/phpt/ucfirst_error.php on line 6