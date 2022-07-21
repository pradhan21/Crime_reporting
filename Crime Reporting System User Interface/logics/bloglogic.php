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
      
        $title =$_REQUEST['blogTitle'];
        $subTitle =$_REQUEST['subTitle'];
        $author =$_REQUEST['author'];
        $fimage =$_FILES['fimage']['name'];
        $description =$_REQUEST['description'];
        $addimage =$_FILES['addimage']['name'];
        $opt_description =$_REQUEST['opt_description'];


        $sql = "INSERT INTO Blog(title, sub_title, author, featured_image, description1, add_image, description2) VALUES('$title', '$subTitle', '$author', '$fimage', '$description', '$addimage', '$opt_description')" ;
        $query_run = mysqli_query($conn, $sql);
        
        if($query_run){

          move_uploaded_file($_FILES['fimage']['tmp_name'], "image/".$_FILES['fimage']['name']);
          move_uploaded_file($_FILES['addimage']['tmp_name'], "image/".$_FILES['addimage']['name']);

          header('Location: blog.php?info = added');
          // exit();
        }

        
    
      }



  // For deleting data
  if(isset($_REQUEST["delete"])){
    $id =$_REQUEST["id"];
    

    $delete = "DELETE FROM blog WHERE blog_id = '$id' ";
    mysqli_query($conn, $delete);
    
    header("Location: blog.php?info = deleted");
    exit();
}






?>