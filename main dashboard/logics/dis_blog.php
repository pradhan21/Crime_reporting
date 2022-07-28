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

    if(isset($_REQUEST['b_id'])){
        $id = $_REQUEST['b_id'];

        $sql = "SELECT * FROM Blog WHERE blog_id = '$id' ";
        $single = mysqli_query($conn, $sql);
        
    }

?>