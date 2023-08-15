<?php 
// mktime() : this is a function i.e used to print future date , current date , past date of systems in php.

// mktime(date("h"),date("i"),date("s),date("m"),date("d"),date("year"));

// $today=mktime(0,0,0,date("m"),date("d"),date("y"));
// echo "Today the date is :".date("d/m/y",$today);

// // after 2 day the date is 
// $d=mktime(0,0,0,date("m"),date("d")+2,date("y"));
// echo "After day of tommarow the date is :".date("d/m/y",$d);

// before 12 day the date is 
// $d=mktime(0,0,0,date("m"),date("d")-12,date("y"));
// echo "Before 12 days the date is :".date("d/m/y",$d);

date_default_timezone_set("Asia/Calcutta");
$d=mktime(date("H")+12,date("i"),date("s"));
echo "Current time is  :".date("H:i:s a",$d);


?>
