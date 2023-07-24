
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
    
</body>
</html>
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
$sql="select * from test4";
$stmt=$conn->prepare($sql);
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
echo "
 
 <table class='table w-75'> 
 
 <tr class='bg-info'>
 <th  class='w-20'>Name </th>
 <th  class='w-20'>Email </th>
 <th  class='w-20'>Password </th>
 <th  class='w-20'>Room NO </th>
 <th  class='w-20'>Ext </th>
 <th  class='w-20'>Action </th>
 
 </tr>
 ";
 foreach ($data as $value) {
        
    

    echo "<tr>";
               echo  "<td> {$value['name']} </td>";
            echo  "<td> {$value['email']} </td>";
            echo  "<td> {$value['Password']} </td>";
            echo  "<td> {$value['room']} </td>";
            echo  "<td> {$value['Ext']} </td>";
           
    echo "<td> <a href='Edit.php?id={$value['id']}' class='btn btn-warning'> Edit </a></td>";
    echo "<td> <a href='delete.php?id={$value['id']}' class='btn btn-danger'> Delete </a></td>";
    echo "</tr>";


}

echo "</table>"
?>