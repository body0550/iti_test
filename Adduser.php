<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=iti_test1", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$room=$_POST['Room'];
$ext=$_POST['Ext'];

$sql="INSERT INTO `test4`(name,email,Password,room,Ext) values(:name,:email,:password,:room,:ext)";
$stmt=$conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':room', $room);
$stmt->bindParam(':ext', $ext);
$stmt->execute();
header("Location:show.php");
?>