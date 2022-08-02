<?php 
    include "connection.php";
    if(isset($_POST['submit'])){
        $complaint_id=$_POST['complaint_id'];
        $police_id=$_POST['police_id'];
        $user_id=$_POST['user_id'];
        $image=$_POST['image'];
        $date=$_POST['date'];
        $location =$_POST['location'];
        $crime_type_id=$_POST['crime_type_id'];
        $evidence= $_POST['evidence'];
        

        // echo $cid,$id;
        // die();
        $sql1="UPDATE user_complaints set status='1' where complaint_id='$complaint_id'";
        mysqli_query($conn,$sql1);

        // $sql5="SELECT * FROM user_complaints where complaint_id='$cid'";
        // $result1=mysqli_query($conn,$sql5);
        // if(mysqli_num_rows($result1)>0){
        //     while($row=mysqli_fetch_array($result1)){
        //         $details=$row['crime_evidence'];
        //         $date=$row['date_col'];
        //         $place=$row['crime_place'];
        //         $type=$row['crime_type'];

        //     }
        // }
        $sql2="INSERT INTO investigation_details(image,evidence,police_id,complaint_id,user_id,crime_type_id,date,location) VALUES('$image','$evidence','$police_id','$complaint_id','$user_id','$crime_type_id','$date','$location')";
        mysqli_query($conn,$sql2);
        $complaint="";
        $sql3="SELECT *FROM investigation_details WHERE complaint_id='$complaint_id'";
        $result=mysqli_query($conn,$sql3);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
                $complaint=$row['investigation_del_id'];
            }
        }
        $sql4="INSERT INTO investigation (investigation_del_id)VALUES('$complaint')";
        if(mysqli_query($conn,$sql4)){
            header("location:report.php");
        }
        else{
            echo mysqli_error($conn);
        }
    }
    if(isset($_POST['submit1'])){
        $update=$_POST['update'];
        $inid=$_POST['id'];
        $sql="INSERT into investigation(investigation_del_id, update)VALUES('$inid','$update')";
        if(mysqli_query($conn,$sql4)){
            header("location:yourcase.php");
        }
        else{
            echo mysqli_error($conn);
        }

    }
?>