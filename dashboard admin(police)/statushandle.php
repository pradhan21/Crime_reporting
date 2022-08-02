<?php 
    include "connection.php";
    if(isset($_POST['submit'])){
        $cid=$_POST['cid'];
        $id=$_POST['id'];
        $sid=$_POST['sid'];
        $complaint="";
        $details="";
        $date="";
        $place="";
        $type="";
        // echo $cid,$id;
        // die();
        $sql1="UPDATE user_complaints set status='1' where complaint_id='$cid'";
        mysqli_query($conn,$sql1);

        $sql5="SELECT * FROM user_complaints where complaint_id='$cid'";
        $result1=mysqli_query($conn,$sql5);
        if(mysqli_num_rows($result1)>0){
            while($row=mysqli_fetch_array($result1)){
                $details=$row['crime_evidence'];
                $date=$row['date_col'];
                $place=$row['crime_place'];
                $type=$row['crime_type'];
                
            }
        }
        $sql2="INSERT INTO investigation_details( VALUES('','$details','','','$id','$cid','$date','$place','$type')";
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
    elseif(isset($_POST['submit1'])){
        $cid=$_POST['cid'];
        $id=$_POST['id'];
        $sid=$_POST['sid'];
        $complaint="";
        $details="";
        $date="";
        $place="";
        $type="";
        // echo $cid,$id;
        // die();
        $sql1="UPDATE user_complaints set status='1' where complaint_id='$cid'";
        mysqli_query($conn,$sql1);

        $sql5="SELECT * FROM user_complaints where complaint_id='$cid'";
        $result1=mysqli_query($conn,$sql5);
        if(mysqli_num_rows($result1)>0){
            while($row=mysqli_fetch_array($result1)){
                $details=$row['crime_evidence'];
                $date=$row['date_col'];
                $place=$row['crime_place'];
                $type=$row['crime_type'];
            }
        }
        $sql2="INSERT INTO investigation_details VALUES('','$details','','','$id','$cid','$date','$place','$type')";
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