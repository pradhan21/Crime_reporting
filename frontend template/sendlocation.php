<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname = "crime_db";
    //create connections
    $conn=mysqli_connect($servername,$username,$password, $dbname);
    //check connection
    if(!$conn){
      die("connection failed:".mysqli_connect_error());
    }
  
 
    if(isset($_POST['submit'])){
        $latitude =$_POST['latitude'];
        $longitude =$_POST['longitude'];
        $sql="INSERT INTO emergency VALUES('','','$latitude','$longitude')";
        if(mysqli_query($conn,$sql)){
            echo
        "
        <script>
        alert('data added successfully');
        </script>
        "
        ;
        header("location:index.html");
        }
        

    }
?>