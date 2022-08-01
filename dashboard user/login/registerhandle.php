<?php
    SESSION_start();
    include "connection.php";

    //bring inputs from form
    if(isset($_POST["Submit"])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $contact=$_POST['contact_no'];
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
                else{
                    $sql="INSERT INTO user(f_name,l_name,username,password,liscence_no,city,address,near_police_station,email,contact_no) Values('$fname','$lname','$username','$pass','$id','$city','$address','$station','$email','$contact')";
                    if(mysqli_query($conn,$sql)){
                        header("location:login.php");
                    }
                    else{
                        echo "error1".mysqli_error($conn);
                    }   
            
                }
            }
        }
        else{
            $sql="INSERT INTO user(f_name,l_name,username,password,liscence_no,city,address,near_police_station,email,contact_no) Values('$fname','$lname','$username','$pass','$id','$city','$address','$station','$email','$contact')";
            if(mysqli_query($conn,$sql)){
                header("location:login.php");
            }
            else{
                echo "error1".mysqli_error($conn);
            }   
        }
    }



?>
                                                                                                
