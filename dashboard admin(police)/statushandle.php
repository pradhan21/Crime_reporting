<?php 
    include "connection.php";
    if(isset($_POST['submit'])){
        $cid=$_POST['cid'];
        $id=$_POST['id'];
        $sid=$_POST['sid'];
        $complaint="";
        // echo $cid,$id;
        // die();
        $sql1="UPDATE user_complaints set status='1' where complaint_id='$cid'";
        mysqli_query($conn,$sql1);
        
        $sql2="INSERT INTO investigation_details VALUES('','','','','$id','$cid')";
        mysqli_query($conn,$sql2);

        $sql3="SELECT *FROM investigation_details WHERE complaint_id='$cid'";
        $result=mysqli_query($conn,$sql3);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
                $complaint=$row['investigation_del_id'];
            }
        }
        $sql4="INSERT INTO investigation VALUES('','','$sid','$complaint')";
        if(mysqli_query($conn,$sql4)){
            header("location:report.php");
        }
        else{
            echo mysqli_error($conn);
        }
    }
?>