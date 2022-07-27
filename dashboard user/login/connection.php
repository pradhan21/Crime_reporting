<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="crime_db";
  //create connections
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  //check connection
  if(!$conn){
    die("connection failed:".mysqli_connect_error());
   // echo "<script>alert('connected to Crime_db')</script>";
  }
  else{
    echo mysqli_error($conn);
  }