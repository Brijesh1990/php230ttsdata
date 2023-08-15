<?php 
date_default_timezone_set("Asia/Calcutta");
$currentday=date("d/m/y")."<br>";
$currenttime=date("H:i:s a")."<br>"; //24 hours formate
$currenttime1=date("h:i:s a")."<br>"; // 12 hours formate
echo "The time is it :".$currenttime."<br>";
echo "The time is it :".$currenttime1."<br>";
echo "Today the date is and time is:".date("d/m/y h:i:s a");

?>