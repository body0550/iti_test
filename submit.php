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
    <form action="Adduser.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
        <div class='invalid-feedback'> <?php  if(isset($errors['username'])){echo $errors['username']; }   ?> </div>

    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <div class='invalid-feedback'> <?php  if(isset($errors['email'])){echo $errors['email']; }   ?> </div>

    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group">
        <label for="password">Room no</label>
        <input type="int" class="form-control" id="Room" name="Room" required>
    </div>
    <div class="form-group">
        <label for="password">Ext</label>
        <input type="text" class="form-control" id="Ext" name="Ext" required>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
    </div>
    <input class="btn btn-primary " type="submit" value="Submit">
</form>
</body>
</html>