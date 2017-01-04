<?php

if(isset($_POST['submit'])){

  $username = $_POST['username'];
  $password = $_POST['password'];
  //DB Connection with mysqli_connect() api localhost, user password , db
  $connection = mysqli_connect('localhost', 'root', '', 'loginnapp' );

  //Insert Query saved into a $query variable
  $query = "INSERT INTO User(username, password) VALUES('$username', '$password')";

  //Query built in funciton with the connection and query paramters
  $result = mysqli_query($connection,$query);

  if(!$result){
    die("Query failed" . mysqli_error());
  }
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <form action="login_create.php" method="post">
        <div class="form-group">
          <labe for="username">Username</labe>
          <input type="text" class="form-control" name="username" />
        </div>
        <div class="form-group">
          <labe for="password">Password</labe>
          <input type="password" class="form-control" name="password" />
        </div>
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
