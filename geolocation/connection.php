<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname = "client_records";
  //create connections
  $conn=mysqli_connect($servername,$username,$password, $dbname);
  //check connection
  if(!$conn){
    die("connection failed:".mysqli_connect_error());
  }

?>
