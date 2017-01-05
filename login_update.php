<?php
// UPDATE Data in the user table 
  include "db.php"; //include connection;
  // SELECT QUERY
  $query = "SELECT * FROM User";
  //Query built in funciton with the connection and query paramters
  $result = mysqli_query($connection,$query);
  if(!$result){
    die("Query failed" . mysqli_error());
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
          <select name="" id="">
            <<option value="">1</option>
          </select>
        </div>
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-warning" value="UPDATE"/>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
