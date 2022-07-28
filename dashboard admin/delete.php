<?php
include "connection.php";
if(isset($_REQUEST["delete"])){
    $id =$_REQUEST["id"];
    

    $delete = "DELETE FROM user WHERE user_id = '$id' ";
    if(mysqli_query($conn, $delete)){
    
    header("Location:user.php");
    }
    else{
        echo mysqli_error($conn);
    }
}
?>