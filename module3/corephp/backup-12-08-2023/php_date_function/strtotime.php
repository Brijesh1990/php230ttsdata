<?php 
// strtotime : convert any string into date formate
echo "Today the date is :".date("d/m/y")."<br>";
echo "Tommarow the date is :".date("d/m/y",strtotime("+1day"))."<br>";
echo "After 15 days the date is :".date("d/m/y",strtotime("+15 day"))."<br>";
echo "After 3 months the date is :".date("d/m/y",strtotime("+3 month"))."<br>";

?>