<?php
//constants are variables whose value doesnot change at any time in code.

//how to define variables
define("ROOT_LOCATION",'usr/local/www');
echo ROOT_LOCATION; // this is a constant.

//predefined constants
echo "<br>";
echo __LINE__; // 10   current line in the file
echo "<br>";
echo __FILE__; ///home/jon/PHP/constants.php name of file
echo "<br>";
echo __DIR__; // current folder we are working in
echo "<br>";

//__CLASS__ shows the class name if we are working with a class
//__FUNCTION__ shows the name of a function we are working with
//__METHOD__ shows the method we may be working with
 ?>
