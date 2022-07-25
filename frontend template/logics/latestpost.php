<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="crime_db";
    //create connections
    $conn=mysqli_connect($servername,$username,$password, $db);
    //check connection
    if(!$conn){
      die("connection failed:".mysqli_connect_error());
    }


    // To show blog in the table
    $sql = "SELECT * FROM Blog ORDER BY date_col DESC";
    $latest = mysqli_query($conn, $sql);


?>