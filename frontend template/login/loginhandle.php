<?php 
SESSION_start();
    include_once "connection.php";

    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $pass=md5($_POST['pass']);

        if($email!="" && $pass!=""){
            $sql="SELECT * FROM user where email='$email' and password='$pass'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)==1){
                $row=mysqli_fetch_assoc($result);
                if($row['email']==$email && $row['password']==$pass){
                    $_SESSION['fname']=$row['f_name'];
                    $_SESSION['lname']=$row['l_name'];
                    $_SESSION['id']=$row['user_id'];
                    $_SESSION['email']=$row['email'];
                    header("location:../../main dashboard/index.php");
                }
            }
            else{
                header("location:login.php");
            }            
        }
    }
    mysqli_close($conn);
?>