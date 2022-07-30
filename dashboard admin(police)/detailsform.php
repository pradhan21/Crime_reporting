<?php
include "connection.php";
if(isset($_POST['submit'])){
    $dir="cimages/";
    $image_path=$dir.basename($_FILES['image']['name']);
    $name=$_POST['f_name'];
    $age=$_POST['age'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $date=$_POST['date'];
    $hair=$_POST['hair'];
    $gender=$_POST['gender'];
    $crimeD=$_POST['crimeD'];
    $race=$_POST['Race'];
    $skin=$_POST['Skin'];
    $station=$_POST['id'];
    // echo $name,$age,$height,$weight,$date,$hair,$gender,$crimeD,$race,$skin,$station;
    $sql="INSERT INTO criminal_details values('$name','$age','$height','$weight','$gender','$hair','$skin','$race','$crimeD','$image_path','$station')";
    if(mysqli_query($conn, $sql)){
        move_uploaded_file($_FILES['image']['tmp_name'],$image_path);
        header("location:Criminal_deets.php?success=Data added succesfully!!");
    }
    else{
        echo mysqli_error($conn);
    }
} 
?>