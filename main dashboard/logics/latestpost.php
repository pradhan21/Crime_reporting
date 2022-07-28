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


    $sql = "SELECT * FROM Blog LIMIT 0,9";
    $query = mysqli_query($conn, $sql);

    // To show blog in the latest Post
    $sql1 = "SELECT * FROM Blog ORDER BY date_col DESC LIMIT 0,3 ";
    $date = mysqli_query($conn, $sql1);


    //To Show blog in Related Post
    $sql2 = "SELECT * FROM Blog ORDER BY RAND() LIMIT 0,3 ";
    $random = mysqli_query($conn, $sql2);

    //To Show blog in first part of index
    $sql3 = "SELECT * FROM Blog where author = 'samantha' LIMIT 1 ";
    $cyber = mysqli_query($conn, $sql3);

    $sql4 = "SELECT * FROM Blog where author = 'samey' LIMIT 1 ";
    $fraud = mysqli_query($conn, $sql4);

    $sql5 = "SELECT * FROM Blog where author = 'harry styles' LIMIT 1 ";
    $murder = mysqli_query($conn, $sql5);

    $sql6 = "SELECT * FROM Blog where author = 'ram shahi' LIMIT 1 ";
    $kidnap = mysqli_query($conn, $sql6);

?>