<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$country = $_POST['country'];
$gender= $_POST['gender'];
$skills = $_POST['skills'];
$username = $_POST['username'];
$password = $_POST['password'];
$department = $_POST['department'];
$captcha = $_REQUEST["captcha"];


//connect data base
if ($captcha == "BOdy500"){
 if($gender=='male'){
    echo"MR.";
 }else{
    echo"MISS.";
 }
echo "$first_name $last_name <br>";
echo "Please review your infromation <br>";
echo "name: $first_name $last_name <br>";
echo "Address: $address<br>";
echo "Skilles :";

foreach ($skills as $key => $value) {
    echo "$value<br>";
}

echo "department: $department<br>";


} else {
    echo "Captcha not correct";
}




?>