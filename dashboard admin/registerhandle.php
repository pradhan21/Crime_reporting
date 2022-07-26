<?php
    SESSION_start();
    include_once "connection.php";

    //bring inputs from form
    if(isset($_POST["Submit"])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $pass=md5($_POST['password']);
        $contact=$_POST['contact'];
        $city=$_POST['city'];
        $address=$_POST['address'];
        $station=$_POST['id'];
        

        $sql="INSERT INTO admin Values('','$fname','$lname','$username','$pass','$city','$address','$contact','$email','$station' )";
        if(mysqli_query($conn,$sql)){
            header("location:index.php");
        }
        else{
            echo "error",mysqli_error($conn);
        }   


    }
    else{
        echo "error",mysqli_error($conn);
    }

?>
                                                                                                
