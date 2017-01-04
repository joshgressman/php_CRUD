<?php
// GET data out of the database with SELECT statment



  //DB Connection with mysqli_connect() api localhost, user password , db
  $connection = mysqli_connect('localhost', 'root', '', 'loginnapp' );

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
      <?php
        //Result Rows stored into $row
        while($row = mysqli_fetch_assoc($result)) { // $result holds query results

            ?>

            <pre>
              <?php
                 print_r($row);
              ?>
            </pre>
            <?php
        }
       ?>
    </div>
  </div>
</div>
</body>
</html>
