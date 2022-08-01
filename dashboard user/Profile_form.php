<?php
$nameErr = "";  
$emailErr = "";  
$genderErr = "";  
$phoneErr = "";  
$mobileErr="";
$addressErr="";
$l_Err="";
$f_Err="";
$name = "";  
$f_name="";
$l_name="";
$email = "";  
$gender = "";  
$comment = "";  
$phone = "";  
$mobile="";
$address="";
SESSION_start();
$id=$_SESSION['id'];
  // echo"<script>alert($id)</script>"; //to check value of id
  if(isset($_SESSION['id'])){
    include "connection.php";

  // include ("connection.php");
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "crime_db";
   $first1="";
   $last1="";
   $phone1="";
   $email1="";  
   $address1="";   
   $image1=""; 
        
   $conn = new mysqli($servername,$username, $password, $dbname);
   if($conn === false){ die("ERRORRRRRR: Could not connect. ". mysqli_connect_error());
   }
   $sql = "SELECT * from user WHERE user_id='$id' ";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_array()) {
       $first1 = $row["f_name"];
       $last1=$row["l_name"];
       $address1 = $row["address"];
       $email1=$row["email"];
       $image1=$row["image"]; 
       //$id=$row["user_id"];
     }
     
   }
  
 echo "<script>alert($first1)</script>"; 
error_reporting(0);
$filename = $_FILES["uploadfile"]["name"];
$folder = "image/" . $filename;
$target_dir = "image/";
$target_file = $target_dir.basename($_FILES["uploadfile"]["name"]);
$msg = "";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// If upload button is clicked ...
if (isset($_POST['upload'])) {

   
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    
    $db = mysqli_connect("localhost", "root", "", "crime_db");
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
   echo "<script>alert('Sorry, ononly JPG, JPEG, PNG & GIF files are allowed.')</script>";
    $db->close();
     }
 
    // Get all the submitted data from the form
    //$sql = "INSERT INTO image (filename) VALUES ('$target_file')";
    //$sql_2="INSERT INTO user (image) VALUES ('$filename') WHERE user_id='$id'";
    $sql_2="UPDATE user SET  image ='$filename',f_name = '$first1', l_name = '$last1', email='$email1', address='$address1' WHERE user_id='$id'";
    // Execute query+
   // mysqli_query($db, $sql); //works successsfully till here but the image dosent get uploaded HELP!!!!!!!!! yo bhanda tala ko part dosent work :(
    mysqli_query($db, $sql_2);
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
   
     header('Location:Profile.php');
    
    } else {
        echo " <script> alert('Failed to upload image!')</script>";
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
  <!--  All snippets are MIT license http://bootdey.com/license -->
  <title>profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/Redirect.css" rel="stylesheet">
  <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css”>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="css/Profile.css" rel="stylesheet">
  <link href="img/favicon.ico" rel="icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color:#000000">
  <div class="container" style="background-color:#000000 ">
    <div class="main-body" style="background-color:#000000 ">

      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb" style="background-color:#191c24 ">
          <li class="breadcrumb-item"><a href="Profile.php">Back</a></li>

          <li class="breadcrumb-item active" aria-current="page">User Profile</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->
      
      <div class="row gutters-sm" style="background-color:#000000">
        <div class="col-md-4 mb-3">
          <div class=" card" style="background-color:#191c24">
            <!-- COPY FROM HERE FOR COLOR-->
            <div class=" card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <!--<img src="img/user.jpg" alt="Admin" class="rounded-circle" width="150">-->
                <form method="POST" action="" enctype="multipart/form-data">
                  <div class="profile-pic">
                    <label class="-label" for="file">
                      <span class="glyphicon glyphicon-camera"></span>
                      <span>Preview image</span>
                    </label>
                    <input id="file" type="file" onchange="loadFile(event)" />
                    <!--<img src="image/Leonardo.jpg" id="output" width="200" onerror="this.style.display='none'" />-->
                  
                    <img src="http://localhost/crime_reporting/dashboard%20user/image/<?php echo $image1;?>" id="output" width="200"
                      onerror="this.style.display='none'" />
                    
                    <!--<img src="https://cdn.pixabay.com/photo/2017/08/06/21/01/louvre-2596278_960_720.jpg" id="output" width="200" />--->
                  </div>
                  </br>
                  <div class="form-group" style="background-color:#000000">
                    <input class="form-control" type="file" name="uploadfile" value=""
                      style="background-color:#000000" />
                  </div>
                  
                  <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
                </form>
                <div class="mt-3">
                  <h4 style="color:white"><?php echo $first1;?> <?php echo $last1; ?></h4>
                  <p class="text-secondary mb-1">------------</p>
                  <p class="text-muted font-size-sm"><?php echo $address1?></p>

                  <button class="btn btn-outline-primary"><a href="#">Message</a></button>
                  <!--MESSAGE -------------------  -->
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-3 ">
            <ul class="list-group list-group-flush">

              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap"
                style="background-color:#191c24">
                <h6 class="mb-0" style="COLOR:white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                    <path
                      d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                    </path>
                  </svg>Github</h6>
                <span class="text-secondary">GIT</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap"
                style="background-color:#191c24">
                <h6 class="mb-0" style="COLOR:white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                    <path
                      d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                    </path>
                  </svg>Twitter</h6>
                <span class="text-secondary">Twitter</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap"
                style="background-color:#191c24">
                <h6 class="mb-0" style="COLOR:white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                  </svg>Instagram</h6>
                <span class="text-secondary">Insta</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap"
                style="background-color:#191c24">
                <h6 class="mb-0" style="COLOR:white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                  </svg>Facebook</h6>
                <span class="text-secondary">FB</span>
              </li>
            </ul>
          </div>
        </div>
        <?php  
                  
//                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
// //first name check
//                       if (emptyempty($_POST["f_name"])) {  
//                         $f_Err = "Name is required";  
//                       } else {  
//                       $f_name = input_data($_POST["f_name"]);  
//                           // check if name only contains letters and whitespace  
//                           if (!preg_match("/^[a-zA-Z ]*$/",$f_name)) {  
//                               $f_Err = "Only alphabets and white space are allowed";  
//                           }  
//                       }  
// //;last name check
//                     if (empty($_POST["l_name"])) {  
//                       $l_Err = "Name Field is required";  
//                     } else {  
                        
//                       $l_name = input_data($_POST["l_name"]);  
//                       if (!preg_match("/^[a-zA-Z-' ]*$/",$l_name)) {  
//                         $l_Err = "Only letters and white space allowed";  
//                       }  
//                     }  
//  //email check                   
//                     if (empty($_POST["email"])) {  
//                     $emailErr = "date field is required";  
//                   } else {  
//                     $email = input_data($_POST["email"]);  
//                     if (empty($_POST["date"])) {  
//                         $emailErr = "date-feild is required";  
//                       }
//                   }  

// //address check
//                   if (empty($_POST["address"])) {  
//                     $addressErr = "Address is required";  
//                   }else {  
//                     $address = input_data($_POST["address"]);  
//                   }  
//                  } 
                  
//                 function input_data($data) {  
//                   $data = trim($data);  
//                   $data = stripslashes($data);  
//                   $data = htmlspecialchars($data);  
//                   return $data; 
         
                //}  
              ?>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body" style="background-color:#191c24">
              
              <form name ="form" method="post" action= "">
              <?php
              $sql1="SELECT * FROM user where user_id='$id'";
              $result1=mysqli_query($conn,$sql1);
              if(mysqli_num_rows($result1)>0){
                while($row1=mysqli_fetch_array($result1)){

                
              ?>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0" style="color:white">First-Name</h6>
                  </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" name="f_name" value="<?php echo $row1['f_name'];?>" required>
                    <span class="error"> 
                  **<?php echo $f_Err;?> 
                    </span>  
                    </div>
                 </div>
                <hr>
                
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0" style="color:white">Last-Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                  <input type="text" name="l_name" value="<?php echo $row1['l_name'];?>" required>
                  <span class="error"> 
                  **<?php echo $l_Err;?> 
                  </span>  
                  </div>
                </div>
                <hr>

                <div class="row" style="background-color:#191c24">
                  <div class="col-sm-3" style="background-color:#191c24">
                    <h6 class="mb-0" style="color:white">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary" >
                    <input type="text" name ="email"  value="<?php echo $row1['email'];?>" required>
                    <span class = "error">
                    **<?php // echo $emailErr;?>
                    </span>
                  </div>
                </div>
                <hr>
                
                
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0" style="color:white">Address</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name ="address" value="<?php echo $row1['address'];?>" required >
                    <span class="error">
                    **<?php echo $addressErr;?>
                    </span>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0" style="color:white">Contact Number</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name ="contact" value="<?php echo $row1['contact_no'];?>" required>
                    <span class="error">
                    **<?php echo $addressErr;?>
                    </span>
                  </div>
                </div>
                <hr>
                  <?php }} ?>
                <div class="row">
                  <div class="col-sm-12">

                    <button type="submit" class="btn btn-primary" name="submitform">Submit</button>
                    <button type="reset" class="btn btn-info">Reset</button><!-- EDIT 111111111111111111111-->
                  </div>
              </div>

              </form>
            </div>
          </div>
          <?php  
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "crime_db";
                        $f_name=$_POST['f_name'];
                        $l_name=$_POST['l_name'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                       
                        $conn = new mysqli($servername,$username, $password, $dbname);

                        if($conn === false){ die("ERRORRRRRR: Could not connect. ". mysqli_connect_error());
                                          }
                                    if(isset($_POST['submitform'])){
                                            $sql="UPDATE user
                                            SET f_name = '$f_name', l_name = '$l_name', email='$email', address='$address'
                                            WHERE user_id = '$id';";
                                          
                                       
                                      if(mysqli_query($conn, $sql)){
                                          echo "<script>alert(data stored in a database successfully.);</script>";
                                          
                                      } else{
                                         //echo "error";
                                              
                                      }
                                    }
                                      
                                      
                         
                                // echo "<h2> Your Input: </h2>";  
                                // echo $f_name;  
                                // echo "<br>";  
                                // echo $email;  
                                // echo "<br>";  
                                
                                // echo $address; 
                                // echo "<br>";


                                if (isset($_POST['submitform']))  
                                {       
                      ?>  
                          <script type="text/javascript">
                            window.location = "profile.php";
                          </script>      
                        
                         <?php
                               }  
                            ?>              
          <div class="row gutters-sm" style="background-color:#000000 " >
            <div class="col-sm-6 mb-3">
              <div class="card h-100">
                <div class="card-body" style="background-color:#191c24">
                  <h6 class="d-flex align-items-center mb-3" style="color:white"><i
                      class="material-icons text-info mr-2">Investigation</i>Report Status</h6>
                  <small style="color:white">Criminal-Identified</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small style="color:white">Criminal-Descrpition</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small style="color:white">Evidence-Collection</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small style="color:white">Alibi-Search</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small style="color:white">Report-Authenticity</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 mb-3">
              <div class="card h-100">
                <div class="card-body" style="background-color:#191c24">
                  <h6 class="d-flex align-items-center mb-3" style="color:white"><i
                      class="material-icons text-info mr-2">Lifetime reports</i>Completion rate</h6>
                  <small style="color:white">Report-1</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small style="color:white">Report-2</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small style="color:white">Report-3</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small style="color:white">Report-4</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small style="color:white">Report-5</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>
      </div>

    </div>
  </div>

  <style type="text/css">
    body {
      margin-top: 20px;
      color: #1a202c;
      text-align: left;
      background-color: #e2e8f0;
    }


    .main-body {
      padding: 15px;
    }

    .card {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid rgba(0, 0, 0, .125);
      border-radius: .25rem;
    }

    .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1rem;
    }

    .gutters-sm {
      margin-right: -8px;
      margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*=col-] {
      padding-right: 8px;
      padding-left: 8px;
    }

    .mb-3,
    .my-3 {
      margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
      background-color: #e2e8f0;
    }

    .h-100 {
      height: 100% !important;
    }

    .shadow-none {
      box-shadow: none !important;
    }
  </style>

  <script type="text/javascript">

  </script>
  <script src="js/Profile.js">

  </script>
</body>

</html>
<?php
  }else{
    echo "error";
  }
?>
