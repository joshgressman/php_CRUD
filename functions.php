  <?php include "db.php"; ?>

<?php

function showAllData() {
  global $connection;
// SELECT QUERY
  $query = "SELECT * FROM User";
  //Query built in funciton with the connection and query paramters
  $result = mysqli_query($connection,$query);
  if(!$result){
    die("Query failed" . mysqli_error());
  }

  while($row = mysqli_fetch_assoc($result))
  {
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}


//Update Query
function updateByID() {
  global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  $query = "UPDATE User SET ";
  $query .= "username = '$username', "; //'' because string
  $query .= "password = '$password' "; //'' because string
  $query .= "WHERE id = $id"; //no quotes because its a number

  //Create the query
    $result = mysqli_query($connection,$query);
    if(!$result)
    {
      die("Query failed" . mysqli_error($connection));
    }
    else
    {
      echo "Update Success";
    }
}

//Delete by id function
function deleteByID() {
  global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  $query = "DELETE FROM User WHERE id = $id";

  //Create the query
    $result = mysqli_query($connection,$query);
    if(!$result)
    {
      die("Query failed" . mysqli_error($connection));
    }
    else
    {
      echo "Delete Success";
    }
}


 ?>
