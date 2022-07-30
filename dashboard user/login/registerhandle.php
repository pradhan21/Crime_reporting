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
        $sql1="SELECT * FROM user";
        $result=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($result)){
            while($row=mysqli_fetch_array($result)){
                if($row['email']==$email){
                    header("location:signup.php?err1=Email already exists!!!");
                }
                elseif($row['liscence_no']==$id){
                    header("location:signup.php?err=CitizenShip already registered!!!");
                }
                else{
                    $sql="INSERT INTO user Values('','$fname','$lname','$username','$pass','$id','$city','$address','$station','$email','' )";
                    if(mysqli_query($conn,$sql)){
                        header("location:login.php");
                    }
                    else{
                        echo "error",mysqli_error($conn);
                    }   
            
                }
            }
        }
        else{
        echo "error",mysqli_error($conn);
        }
    }



?>
                                                                                                
