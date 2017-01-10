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
 ?>
