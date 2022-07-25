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
        $id=$_POST['id'];
        $city=$_POST['city'];
        $address=$_POST['address'];
        $station=$_POST['station'];
        

        $sql="INSERT INTO user Values('','$fname','$lname','','$username','$email','$pass','$id','$city','$address','$station',''  )";
        if(mysqli_query($conn,$sql)){
            header("location:login.php");
        }
        else{
            echo "error",mysqli_error($conn);
        }


    }
    else{
        echo "error",mysqli_error($conn);
    }

?>
                                                                                                
