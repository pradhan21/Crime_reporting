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
        // date_default_timezone_set('Asia/Katmandu');
        // $date = date('m/d/Y h:i:s a', time());
        $sql="INSERT INTO emergency(latitude, longitude) VALUES('$latitude','$longitude')";
        if(mysqli_query($conn,$sql)){
            echo
        "
        <script>
        alert('data added successfully');
        </script>
        "
        ;
        header("location:index.php");
        }
        else{
            echo mysqli_error($conn);
        }
        

    }
    
    else{
        echo mysqli_error($conn);
    }
?>