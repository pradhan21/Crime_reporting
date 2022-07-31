<?php 
SESSION_start();
    include_once "connection.php";

    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $pass=md5($_POST['pass']);
        // echo $email,$pass;
        // die();

        if($email!="" && $pass!=""){
            $sql="SELECT * FROM police_registration  WHERE email_id='$email' AND password='$pass'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)==1){
                if($row=mysqli_fetch_assoc($result)){
                
                    $_SESSION['fname']=$row['f_name'];
                    $_SESSION['lname']=$row['l_name'];
                    $_SESSION['id']=$row['police_id'];
                    $_SESSION['sid']=$row['station_id'];
                    $_SESSION['email']=$row['email_id'];
                    $_SESSION['username']=$row['username'];
                    header("location:dashboard.php");
                }
            }
            else{
                header("location:index.php?err= Invalid email or password!!!");
            }            
        }
        else{
            header("location:index.php?err= Email and password required!!!");
        }
    }
    mysqli_close($conn);
?>