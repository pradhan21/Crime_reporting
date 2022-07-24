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
    $sql = "SELECT * FROM Blog";
    $query = mysqli_query($conn, $sql);


    // Inserting the data in database from FORM
    if(isset($_REQUEST["blog_insert"])) {
       
      // && isset($_FILES['fimage'])

      // echo "<pre>";
      // print_r($_FILES['fimage']);
      // echo"</pre>";
        $dir="images/";
        $dir1="images1/";
        $title =$_REQUEST['blogTitle'];
        $subTitle =$_REQUEST['subTitle'];
        $author =$_REQUEST['author'];
        $image_path=$dir.basename($_FILES['fimage']['name']);
        $description =$_REQUEST['description'];
        $image1_path=$dir1.basename($_FILES['addimage']['name']);
        $opt_description =$_REQUEST['opt_description'];


        $sql = "INSERT INTO Blog(title, sub_title, author, featured_image, description1, add_image, description2) VALUES('$title', '$subTitle', '$author', '$image_path', '$description', '$image1_path', '$opt_description')" ;
    
        if(mysqli_query($conn, $sql)){
          move_uploaded_file($_FILES['fimage']['tmp_name'],$image_path);
          move_uploaded_file($_FILES['addimage']['tmp_name'],$image1_path);
          header("Location: blog.php?info = inserted");
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
    

    $delete = "DELETE FROM blog WHERE blog_id = '$id' ";
    mysqli_query($conn, $delete);
    
    header("Location: blog.php?info = deleted");
    exit();
}




// Updating the data in database from FORM
if(isset($_REQUEST["blog_update"])) {
  // echo "<pre>";
  // print_r($_FILES['fimage']);
  // echo"</pre>";

    $dir="images/";
    $dir1="images1/";
    $id =$_REQUEST["id"];
    $title =$_REQUEST['blogTitle'];
    $subTitle =$_REQUEST['subTitle'];
    $author =$_REQUEST['author'];
    $image_path=$dir.basename($_FILES['fimage']['name']);
    $description =$_REQUEST['description'];
    $image1_path=$dir1.basename($_FILES['addimage']['name']);
    $opt_description =$_REQUEST['opt_description'];

    $sql = "UPDATE Blog SET title ='$title', sub_title = '$subTitle', author = '$author', description1 = '$description', description2 = '$opt_description', featured_image = '$image_path',  add_image = '$image1_path' WHERE blog_id = '$id' " ;
    
    if(mysqli_query($conn, $sql)){
      move_uploaded_file($_FILES['fimage']['tmp_name'],$image_path);
      move_uploaded_file($_FILES['addimage']['tmp_name'],$image1_path);
      header("Location: blog.php?info = updated");
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



