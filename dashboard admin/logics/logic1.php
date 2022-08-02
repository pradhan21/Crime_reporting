<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="crime_db";
    //create connections
    $conn=mysqli_connect($servername,$username,$password, $db);
    //check connection
    if(!$conn){
      die("connection failed:".mysqli_connect_error());
    }


    // To show blog in the table
    $sql = "SELECT * FROM missing_details";
    $query = mysqli_query($conn, $sql);


    // Inserting the data in database from FORM
    if(isset($_REQUEST["blog_insert"])) {
       
      // && isset($_FILES['fimage'])

      // echo "<pre>";
      // print_r($_FILES['fimage']);
      // echo"</pre>";
        $dir="mimages/";
        $name=$_REQUEST['name'];
        $date=$_REQUEST['date'];
        $homeland=$_REQUEST['homeland'];
        $gender=$_REQUEST['gender'];
        $llocation=$_REQUEST['lost_location'];
        $ldate=$_REQUEST['ldate'];
        $cname=$_REQUEST['cname'];
        $number=$_REQUEST['number'];
        $description =$_REQUEST['description'];
        $image_path=$dir.basename($_FILES['fimage']['name']);
      


        $sql = "INSERT INTO missing_details(name, Homeland	,Date,	gender,	llocation,	ldate,	cname,	contact,	description,	image) 
        VALUES('$name', '$homeland', '$date', '$gender', '$llocation', '$ldate', '$cname','$number','$description','$image_path')" ;
    
        if(mysqli_query($conn, $sql)){
          move_uploaded_file($_FILES['fimage']['tmp_name'],$image_path);
          
          header("Location: missing.php?info = inserted");
          exit();

        }
        else{
          echo mysqli_error($conn);
        }

      //   if(move_uploaded_file($_FILES['fimage']['tmp_name'],$image_path) or move_uploaded_file($_FILES['addimage']['tmp_name'],$image1_path)){
      //     $sql = "INSERT INTO Blog(title, sub_title, author, featured_image, description1, add_image, description2) VALUES('$title', '$subTitle', '$author', '$image_path', '$description', '$image1_path', '$opt_description')" ;
      //     if( mysqli_query($conn, $sql)){
      //       header('Location: blog.php?info = added');
      //     }
      //     else{
      //       echo mysqli_error($conn);
      //     }
      //   }
      //   else{
      //     echo mysqli_error($conn);
      //   }
            
      // }
      // else{
      //   echo mysqli_error($conn);
      // }

    }
    else{
      echo mysqli_error($conn);
    }



  // For deleting data
  if(isset($_REQUEST["delete"])){
    $id =$_REQUEST["id"];
    

    $delete = "DELETE FROM missing_details WHERE missing_id = '$id' ";
    mysqli_query($conn, $delete);
    
    header("Location: missing.php?info = deleted");
    exit();
}




// Updating the data in database from FORM
if(isset($_REQUEST["blog_update"])) {
  // echo "<pre>";
  // print_r($_FILES['fimage']);
  // echo"</pre>";

    $id =$_REQUEST["id"];
    $dir="mimages/";
    $name=$_REQUEST['name'];
    $date=$_REQUEST['date'];
    $homeland=$_REQUEST['homeland'];
    $gender=$_REQUEST['gender'];
    $llocation=$_REQUEST['lost_location'];
    $ldate=$_REQUEST['ldate'];
    $cname=$_REQUEST['cname'];
    $number=$_REQUEST['number'];
    $description =$_REQUEST['description'];
    $image_path=$dir.basename($_FILES['fimage']['name']);
    $sql = "UPDATE missing_details set name='$name', Homeland='$homeland'	,Date='$date',	gender='$gender',	llocation='$llocation',	ldate='$ldate',	cname='$cname',	contact='$number',	description='$description',	image='$image_path' WHERE missing_id = '$id' " ;
    
    if(mysqli_query($conn, $sql)){
      move_uploaded_file($_FILES['fimage']['tmp_name'],$image_path);
      
      header("Location: missing.php?info = updated");
      exit();

    }
    else{
      echo mysqli_error($conn);
    }
        
  }
  else{
    echo mysqli_error($conn);
  }




?>



