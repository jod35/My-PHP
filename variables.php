<?php

//variables are containers for storing data in memory.

//data types

//1.Strings
//these are just words
//like

$myName="Ssali Jonathan";
echo $Myname;
echo "<br>";
$username=$myName;
echo $username; //Ssali Jonathan


//numerical variables
$count=4; //integer
$count=15.6; // decimal

echo "<br>";
//arrays
$team=array('Jonathan','Jeremiah','Jordan','Jennifer');
// echo $team[0];
// echo "<br>";
// echo $team[1];
// echo "<br>";
// echo $team[2];
// echo "<br>";
// echo $team[3];

//tictactoe
$game=array(
array('o','x','x'),
array('o','x','o'),
array('x','','o'),
);

//accessing stuff is like
echo $game[1][2]; //o

//             RULES FOR NAMING VARIABLES IN php
//            1. they all start with a $ sign
//            2. they are all a-z, A-z, 0-9 or can start with _
//            3. variable names should never have any spaces
//            4. variable names are so case sensitive



 ?>
