<?php
    include "login/connection.php";
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $contact=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
       

        $sql="INSERT INTO contact values('','$fname','$lname','$contact','$subject','$message','')";
        if(mysqli_query($conn,$sql)){
            header("location:contact.php?success=Contact request sent!!!");

        }
        else{
            echo mysqli_error($conn);
        }

    }
    else{
        echo mysqli_error($conn);
    }
?>