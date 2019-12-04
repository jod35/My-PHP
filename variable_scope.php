<?php
//scope is simply how broadly a variable can be used within a program.

//Local scope
//any variable in local scope is  mentioned within a function
//e.g $her ="My";

//global scope
// not in a function

$a ="Jonathan"; //global scope

function sayHello($name){
  return $name="Melissa";//local scope
}

 echo sayHello($a); //returns "Melissa"














 ?>
