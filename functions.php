<?php
    function Hello($name)
    {
        return "Hello $name";
    }
    echo MaximumNo(34,356);
    // echo Hello("Jonathan");

    function MaximumNo($x,$y)
    {
        if($x>$y){
            return "$x is greater than $y";
        }
        elseif($x==$y){
            return "$x is equal to $y";
        }
        else{
            return "$y is greater than $x";
        }
    }

    echo MaximumNo(12,12);
?>