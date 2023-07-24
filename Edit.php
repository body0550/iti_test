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
$id=$_GET['id'];
$sql="select * from test4 where id =:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD user</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="update.php?id=<?php echo $data[0]['id'];?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value=<?php echo "{$data[0]['name']}"; ?> required>
        <div class='invalid-feedback'> <?php  if(isset($errors['username'])){echo $errors['username']; }   ?> </div>

    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value=<?php echo "{$data[0]['email']}" ;?> required>
        <div class='invalid-feedback'> <?php  if(isset($errors['email'])){echo $errors['email']; }   ?> </div>

    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" id="password" name="password" value=<?php echo "{$data[0]['Password']}" ;?> required>
    </div>
    <div class="form-group">
        <label for="password">Room no</label>
        <input type="int" class="form-control" id="Room" name="Room" value=<?php echo "{$data[0]['room']}" ;?> required>
    </div>
    <div class="form-group">
        <label for="password">Ext</label>
        <input type="text" class="form-control" id="Ext" name="Ext" value=<?php echo "{$data[0]['Ext']}" ;?> required>
    </div>
    <input class="btn btn-primary " type="submit" value="Submit">
</form>
</body>
</html>