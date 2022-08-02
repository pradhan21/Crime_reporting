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
            echo '<script type="text/javascript">';
            echo 'window.location.href = "index.php";'; 
            echo 'alert("Emergency request Registered.\n You will receive a call from +977-9876543210!!");';
           
            echo '</script>';
        
        }
        else{
            echo mysqli_error($conn);
        }
        

    }
    
    else{
        echo mysqli_error($conn);
    }
    if(isset($_POST['nonuser'])){
        $contact=$_POST['contact'];
        // echo $contact;
        // die();
        $latitude =$_POST['latitude'];
        $longitude =$_POST['longitude'];
        //  echo $contact,  $latitude,    $longitude;
        // die();
        // date_default_timezone_set('Asia/Katmandu');
        // $date = date('m/d/Y h:i:s a', time());
        $sql="INSERT INTO emergency(contact,latitude, longitude) VALUES('$contact','$latitude','$longitude')";
        if(mysqli_query($conn,$sql)){
        
        // echo "<script>alert('Emergency request Registered.\n You will receive a call from +977-9876543210!!')</script>";
        // header("location:index.php");
        echo '<script type="text/javascript">';
        echo 'window.location.href = "index.php";'; 
        echo 'alert("Emergency request Registered.\n You will receive a call from +977-9876543210!!");';
       
        echo '</script>';
       
        }
        else{
            echo mysqli_error($conn);
        }
        

    }
    
    else{
        echo mysqli_error($conn);
    }
?>