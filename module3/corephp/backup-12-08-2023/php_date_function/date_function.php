<?php 
// date function is used to print current date, time of systems
// date function is a inbuild function inside of php date();
// date function is used date formate to print current date and time in php


$d=date("d/m/y");
echo "Today the date is :".$d."<br>";

//types of date formate

$date1=date("d-m-y");
$date2=date("d/m/y");
$date3=date("d.m.y");

echo "Today the date is :".$date1."<br>".$date2."<br>".$date3;




?>