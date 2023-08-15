<?php 
 $price=1500;
 $checkin=mktime(0,0,0,date("m"),date("d"),date("y"));
 $checkout=mktime(0,0,0,date("m"),date("d")+3,date("y"));
 $diff=($checkout-$checkin)/86400;
 //echo $diff;
 $total=$price*$diff;
 echo "Total bill of your stay in Hotel is :".$total;
 
?>