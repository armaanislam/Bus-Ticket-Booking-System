<?php

  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname ="testdb";

  $connect = mysqli_connect("$server"."$username", "$password", "$dbname");
  if($connect){
    die("No connection", mysqli_error())
  }
?>
  