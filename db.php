<?php
//DB Connection with mysqli_connect() api localhost, user password , db
$connection = mysqli_connect('localhost', 'root', '', 'loginnapp' );
if(!$connection){
  
  die("Database connection failed");
}


 ?>
