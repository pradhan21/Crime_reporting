<?php
include "connection.php"; 
if(isset($_POST['submit1'])){
        $update=$_POST['update'];
        $inid=$_POST['id'];
        // echo $update;
        // echo $inid;
        // die();
        
        $sql="INSERT INTO investigation(investigation_del_id,updates) VALUES ('$inid','$update')";
        if(mysqli_query($conn,$sql)){
            header("location:casedisplay.php");
        }
        else{
            echo mysqli_error($conn);
        }
    }
if(isset($_POST['submit2'])){
    $id=$_POST['close'];
    
    $sql="UPDATE investigation_details set status='1' where investigation_del_id='$id'";
    if(mysqli_query($conn,$sql)){
        header("location:casedisplay.php");
    }
    else{
        echo mysqli_error($conn);
    }
}
?>