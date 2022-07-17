<?php
  $servername="localhost";
  $username="root";
  $password="";
  //create connections
  $conn=mysqli_connect($servername,$username,$password);
  //check connection
  if(!$conn){
    die("connection failed:".mysqli_connect_error());
  }
  echo "connection successfuly";

  //create database
  $sql="CREATE database crime_db";
  if(mysqli_query($conn,$sql)){
    echo "database created successfuly";
  }
  else{
    echo"error creating database:".mysqli_error($conn);
  }
  //close mysqli
  mysqli_close($conn);
?>
