<?php 
SESSION_start();
    include_once "connection.php";

    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $pass=md5($_POST['pass']);

        if($email!="" && $pass!=""){
            $sql="SELECT * FROM police_registration  where email_id='$email' and password='$pass'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)==1){
                $row=mysqli_fetch_assoc($result);
                if($row['email_id']==$email && $row['password']==$pass){
                    $_SESSION['fname']=$row['f_name'];
                    $_SESSION['lname']=$row['l_name'];
                    $_SESSION['id']=$row['police_id'];
                    $_SESSION['email']=$row['email_id'];
                    $_SESSION['username']=$row['username'];
                    header("location:dashboard.php");
                }
            }
            else{
                header("location:index.php");
            }            
        }
    }
    mysqli_close($conn);
?>