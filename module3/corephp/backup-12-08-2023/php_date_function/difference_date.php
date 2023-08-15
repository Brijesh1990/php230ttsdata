<?php 
 $price=1500;
 $today=mktime(0,0,0,date("m"),date("d"),date("y"));
 $tommarow=mktime(0,0,0,date("m"),date("d")+1,date("y"));
 $diff=($tommarow-$today)/86400;
 //echo $diff;
 $total=$price*$diff;
 echo "Total bill of your stay in Hotel is :".$total;
 
?>