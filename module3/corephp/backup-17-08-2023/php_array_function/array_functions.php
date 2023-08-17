<?php 
// // array_count_values() : count the array values
// $arr=array("php","asp.net","php","react js","php","java","react js");
// print_r(array_count_values($arr));


//array_combine() : combine two array but first array as key and second array as values
// $arr1=array(0,1,2);
// $arr2=array("php","asp.net","php");
// print_r(array_combine($arr1,$arr2));

//array_merge() : merge two or more array
// $arr1=array("a"=>"brijesh","b"=>"mihir","c"=>"kavesh");
// $arr2=array("a"=>"meena","b"=>"mukund","c"=>"uttam");
// $arr3=array("a"=>"meena","b"=>"mukund","c"=>"ramesh","d"=>"pooja");
// print_r(array_merge($arr1,$arr2,$arr3));

//array_push(): push a new element in last array
// $arr1=array("a"=>"brijesh","b"=>"mihir","c"=>"kavesh");
// //print_r($arr1);
// print_r(array_push($arr1,"uttam"));
// print_r($arr1);


// $arr1=array("brijesh","mihir","kavesh");
// print_r(array_push($arr1,"uttam"));
// print_r($arr1);


//pop: delete a last element from array
// $arr1=array("brijesh","mihir","kavesh");
// print_r(array_pop($arr1));
// print_r($arr1);



//array_reverse()

// $arr1=array("brijesh","mihir","kavesh");
// print_r(array_reverse($arr1));

// in_array() : this function is used to check an array is available in array or not 

// $arr1=array("brijesh","mihir","kavesh");
// if(in_array("meena",$arr1))
// {
//     echo "Available";
// }
// else 
// {
//     echo "Not available";
// }

//array sort in asending and decending order
$arr1=array("brijesh","mihir","kavesh");
// ksort($arr1); //ksort sort any array with its key in acsending order
// foreach($arr1 as $value)
// {
//     echo "Name is :".$value."<br>";
// }


// krsort($arr1); //krsort sort any array with its key in desending order
// foreach($arr1 as $value)
// {
//     echo "Name is :".$value."<br>";
// }

// asort($arr1); //asort sort any array with its value in acsending order
// foreach($arr1 as $value)
// {
//     echo "Name is :".$value."<br>";
// }


krsort($arr1); //krort sort any array with its value in desending order
foreach($arr1 as $value)
{
    echo "Name is :".$value."<br>";
}





?>