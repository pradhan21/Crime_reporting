<?php 
    include "connection.php";
    if(isset($_POST['update'])){
        $details=$_POST['details'];
        $sid=$_POST['complaint'];
        $name=$_POST['name'];
        $type=$_POST['type'];
        $date=$_POST['date'];
        $place=$_POST['place'];
        $evidence=$_POST['evidence'];

        $invid="";

        $sql="UPDATE investigation_details set details='$details', evidences='$evidence', date='$date' where complaint_id='$sid'";
        mysqli_query($conn,$sql);

        $sql3="SELECT *FROM investigation_details WHERE complaint_id='$cid'";
        $result=mysqli_query($conn,$sql3);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
                $invid=$row['investigation_del_id'];
            }
        }

        $sql1="UPDATE investigation set criminal_name='$name'  where investigation_del_id='$invid'";
        if(mysqli_query($conn,$sql1)){
            header("location:casedisplay.php");
        }
        else{
            echo mysqli_error($conn);
        }
    }
?>