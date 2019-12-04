<?php
//functions are ways we use to reuse code

//declaring a function
// function Hello($name)
// {
//   return "Hello ".$name;
// }
//
// echo Hello("Ssali Jonathan"); // calling a function with its argument "Ssali Jonathan" "Hello Ssali Jonathan"

// function Average($x,$y)
// {
//   return ($x + $y)/2;
// }
//
// echo Average(2,3); //2.5

//
// function Loves($name,$action)
// {
//   return "$name loves $action";
// }
//
// echo Loves("Jonathan","Coding"); //Jonathan loves Coding

function SimpleInterest($P,$R,$T)
{
  return $R * ($R /100) * $T;
}
echo SimpleInterest(20000,20,12); //48






 ?>
