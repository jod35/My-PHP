<?php
//switch case statements prevent too much use of nested if statemets

//e.g
if($option==1){echo "Send Money";}
elif($option==2){echo "Deposit Money";}
elif($option==3){echo "Buy Airtime";}
elif($option==4){echo "Withdraw Money";}
elif($option==0){echo "Exit";}
else{echo "Unknown Option";}

//with a switch statement
switch ($option){
  case 1:
  echo "Send Money";
  break;
  case 2:
  echo "Deposit Money";
  break;
  case 3:
  echo "Buy Airtime";
  break;
  case 0:
  echo "Exit";
  break;

  default:
  echo "Unknown Option";
  break;

}


#an alternative syntax
switch ($option):
  case 1:
  echo "Send Money";
  break;
  case 2:
  echo "Deposit Money";
  break;
  case 3:
  echo "Buy Airtime";                   //just incase we forgot the curly braces at the end of switch
   break;
  case 0:
  echo "Exit";
  break;

  default:
  echo "Unknown Option";
  break;

endswitch;














 ?>
