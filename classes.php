<?php

$jona= new Person();
// print_r($jona); //Person Object ( [name] => [age] => )

echo "<br>";
$jona-> name ="Jonathan";
$jona-> age  =20;
$jona-> get_name();
print_r($jona); //namePerson Object ( [name] => Jonathan [age] => 20 )

class Person
{
  public $name,$age;

  function get_name()
  {
    echo "name";
  }
}







 ?>
