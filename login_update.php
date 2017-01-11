
  <?php include "db.php"; ?>
  <?php include "functions.php"; ?>
<?php
if(isset($_POST['submit']))
{
updateByID();

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
      <form action="login_update.php" method="post">
        <div class="form-group">
          <labe for="username">Username</labe>
          <input type="text" class="form-control" name="username" />
        </div>
        <div class="form-group">
          <labe for="password">Password</labe>
          <input type="password" class="form-control" name="password" />
        </div>
        <div class="form-group">
          <select name="id" id="id">
            <?php
            //This will loop through the Ids in the database and dynmicaly collator_create
            //a select option for each id.
              showAllData();

             ?>
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
