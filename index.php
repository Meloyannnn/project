<?php

//     $var = "some text";
//     $num = 123;

// //  isset(),empty();

// // $result = isset($var);
// // echo $result;

// // echo "<br>";

// // $status = empty($nudm);
// // echo $status;

// $str = "";

// if (isset($str)) {
//     echo "Varible $str is exist". "<br>";
// }

// if (empty($str)) {
//     echo "Varible $str is not exisist". "<br>";
// }


// echo gettype(isset($str));



// HOMEWORK 

// 1

// $string = "";

// echo isset($stirng);


// 2 

// $a = 1;
// $b = 2;
// $c = 3;

// echo isset($a,$b,$c);


$con = new mysqli('localhost','root','','connect') or die("Uneble to exsits");

if($con) {
    $products = mysqli_query($con,"SELECT * FROM `users`"); 
    $products = mysqli_fetch_all($products);
    var_dump($products);    
}