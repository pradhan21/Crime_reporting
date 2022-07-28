<?php
    include "connection.php";
    if(isset($_POST["submit"])){
        $name=$_POST['sname'];
        $city=$_POST['city'];
        $address=$_POST['address'];
        $contact=$_POST['contact'];
        if(strlen($contact)>10){
            header("location:Criminal_details_form.php?dataError1= Contact Number must be of 10 digits. ");
        }
        else{
            $sql="INSERT INTO police_station VALUES('','$name','$city','$address','$contact','')";
            if($result=mysqli_query($conn,$sql)){
                header("location:Criminal_details_form.php?data1= Station Added.");
            }
            else{
                echo mysqli_error($conn);
            }
        }
    }
?>