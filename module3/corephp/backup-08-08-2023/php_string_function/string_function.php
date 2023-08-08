<?php 

$str="my name is hezal";
// strlen() : find string length
echo strlen($str)."<br>";
// strpos
echo  strpos("hello world","hello")."<br>";
// //ucfirst(): convert any string of first letter in uppercase  
$str1="hello smith";
echo ucfirst($str1)."<br>";

//ucwords(): convert each words of first letter in uppercase  
$str1="hello smith";
echo ucwords($str1)."<br>";

// strtoupper: 
$str1="hello smith";
echo strtoupper($str1)."<br>";

// strtolower: 
$str1="HELLO SMITH";
echo strtoupper($str1)."<br>";

// base64_encode: encode is used to convert non readable formate of any string
$str1="hezal$$123456789";
echo base64_encode($str1)."<br>";

// base64_decode : decode is used to convert readable format of any string
$str1="aGV6YWwkJDEyMzQ1Njc4OQ==";
echo base64_decode($str1)."<br>";
//md5() : string function i.e used to convert any string in encoded formate after md5 we never decode string
$pwd="hezal&&@@321456";
echo md5($pwd)."<br>";
// rand() : convert any rand values
echo rand(11111,99999)."<br>";
// strstr : match string to string and return all matched all string and  follow case senstive
echo strstr("tops technology","technology")."<br>";
echo strstr("hezal pandya","zal")."<br>";
echo strstr("hezal pandya","Zal")."<br>";

// stristr : match string to string and return all matched all string and does not follow case senstive
echo stristr("tops technology","technology")."<br>";
echo stristr("hezal pandya","zal")."<br>";
echo stristr("hezal pandya","Zal")."<br>";


// trim() :trim is used to trim any string from left and right both side 

// $str="Shivani pandya";
// echo trim($str,"pandya");

// $str="Shivani pandya";
// echo trim($str,"Shivani");


// $str="shivani pandya";
// // echo ltrim($str,"shivani");
// echo ltrim($str,"pandya");



// $str="shivani pandya";
// // echo rtrim($str,"shivani");
// echo rtrim($str,"pandya");

// $str="my name is brijesh";
// echo strrev($str);

$str="my name is brijesh";
echo str_shuffle($str)."<br>";

//explode():explode is used to convert any string to array
$str="hello my name is brijesh";
print_r(explode(" ",$str));

//implode():implode is used to convert any array into string
$arr=array(0=>"hi",1=>"my",2=>"name",3=>"is",4=>"brijesh");
echo implode(" ",$arr);


?>