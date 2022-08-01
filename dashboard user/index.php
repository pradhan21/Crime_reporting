<?php 
SESSION_start();
 $id=$_SESSION['id'];
//  echo"<script>alert($id)</script>"; //to check value of id
  if(isset($_SESSION['id'])){
    include "connection.php";
?>
<?php
                  // $servername = "localhost";
                  // $username = "root";
                  // $password = "";
                  // $dbname = "crime_db";
                  $fisrt1="";
                  $last1="";
                  $phone1="";
                  $email1="";  
                  $address1="";  
                  $user_id="";     
                  $image1="";   
                  $no="0";
                  // $conn = new mysqli($servername,$username, $password, $dbname);
                  // if($conn === false){ die("ERRORRRRRR: Could not connect. ". mysqli_connect_error());
                  // }
                  $sql = "SELECT   user_id,f_name,l_name,address,email,liscence_no,image from user where user_id='$id' limit 0,5 ";
                  $sql2="SELECT * from user_complaints where user_id='$id' limit 0,5";
                  $result = $conn->query($sql);
                  $result2 = $conn->query($sql2);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      $first1 = $row["f_name"];
                      $last1=$row["l_name"];
                      $address1 = $row["address"];
                      $email1=$row["email"];
                      $image1=$row["image"];
                      $user_id=$row["user_id"];
                      $l_no=$row["liscence_no"];
                    }
                  }
                  
          ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Crime Reports</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
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

<body>
  <div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->


    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
      <nav class="navbar bg-secondary navbar-dark">
        <a href="../main dashboard/index.php" class="navbar-brand mx-4 mb-3">
          <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Home</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
          <div class="position-relative">
          <img class="rounded-circle" src="http://localhost/crime_reporting/dashboard%20user/image/<?php echo $image1;?>" id="output" style="width: 40px; height: 40px;" onerror="this.style.display='none'"/>
             
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
          </div>
          <div class="ms-3">
            <h6 class="mb-0"><?php echo $_SESSION['fname'].' '.$_SESSION['lname']?></h6><!-- user-->
            <span></span><!-- user-->
          </div>
        </div>
        <div class="navbar-nav w-100">
          <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
          <!--<div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
            <div class="dropdown-menu bg-transparent border-0">
              <a href="button.html" class="dropdown-item">Buttons</a>
              <a href="typography.html" class="dropdown-item">Typography</a>
              <a href="element.html" class="dropdown-item">Other Elements</a>
            </div>
          </div>-->
          <!--<a href="widget.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>-->
          <!-- <a href="blog.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Blog/News </a> -->
        <!--  <a href="blogpost.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Blog Post</a>-->
        <a href="Table_criminal.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Criminal detail</a>
        <a href="Table_criminal.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>My </a>
          <!--<a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>-->
         <!-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>-->
          <!-- <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
            <div class="dropdown-menu bg-transparent border-0">
              <a href="signin.html" class="dropdown-item">Sign In</a>
              <a href="signup.html" class="dropdown-item">Sign Up</a>
              <a href="404.html" class="dropdown-item">404 Error</a>
              <a href="blank.html" class="dropdown-item">Blank Page</a>
            </div>
          </div> -->
        </div>
      </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
        <a href="../main dashboard/index.php" class="navbar-brand d-flex d-lg-none me-4">
          <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
          <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
          <input class="form-control bg-dark border-0" type="search" placeholder="Search">
        </form>
        <div class="navbar-nav align-items-center ms-auto">
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <i class="fa fa-envelope me-lg-2"></i>
              <span class="d-none d-lg-inline-flex">Message</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
              <a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="http://localhost/crime_reporting/dashboard%20user/image/<?php echo $image1;?>" alt="" style="width: 40px; height: 40px;">
                  <div class="ms-2">
                    <h6 class="fw-normal mb-0">leo sent you a message</h6>
                    <small>15 minutes ago</small>
                  </div>
                </div>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">

                  <div class="ms-2">
                    <h6 class="fw-normal mb-0">leo sent you a message</h6>
                    <small>16 minutes ago</small>
                  </div>
                </div>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                  <div class="ms-2">
                    <h6 class="fw-normal mb-0">Stan sent you a message</h6>
                    <small>17 minutes ago</small>
                  </div>
                </div>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item text-center">See all message</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <i class="fa fa-bell me-lg-2"></i>
              <span class="d-none d-lg-inline-flex">Notification</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">Report sent</h6>
                <small>30 seconds ago</small>
              </a>

              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">Profile updated</h6>
                <small>15 minutes ago</small>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">Password changed</h6>
                <small>15 minutes ago</small>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item text-center">See all notifications</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <img class="rounded-circle me-lg-2" src="http://localhost/crime_reporting/dashboard%20user/image/<?php echo $image1;?>" alt="" style="width: 40px; height: 40px;">
              <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['fname'].' '.$_SESSION['lname']?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
              <a href="Profile.php" class="dropdown-item">My Profile</a>
              <a href="#" class="dropdown-item">Settings</a>
              <a href="login/logout.php" class="dropdown-item">Log Out</a>
            </div>
          </div>
        </div>
      </nav>
      <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
          <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Report History</h6>
            <a href="full_show.php">Show All</a>
          </div>
          
          <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
              <thead>
                <tr class="text-white">
                  <th scope="col"></th>
                  <th scope="col">Crime-ID</th>
                  <th scope="col">User_ID</th>
                  <th scope="col">Crime Location</th>
                  <th scope="col">Crime type</th>
                  <th scope="col">Image</th>
                  <th scope="col">Status</th>
                  <!--    <th scope="col">Action</th>-->
                </tr>
              </thead>
              <tbody>
                <?php 
                if ($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()){
                  $c_id = $row["complaint_id"];
                  $u_id=$row["user_id"];
                  $c_place = $row["crime_place"];
                  $c_type=$row["crime_type"];
                //  $evidence=$row["evidence"];
                  $image2=$row["image"]; 
                 // $image1=$row["image"];
                ?>
                <tr>
                  <th scope="row"><?php echo ++$no;?></th>
                  <td><?php echo $c_id;?></td>
                  <td><?php echo $u_id;?></td>
                  <td><?php echo $c_place;?></td>
                  <td><?php echo $c_type;?></td>
                  <td><img src="http://localhost/crime_reporting/dashboard%20template/<?php echo $image2;?>"onerror="this.style.display='none'"/></td>
                  <td>On-Going</td>


                </tr>
                <?php 
                //  echo "<script>alert('success')</script>";
                }

                }else {
                //  mysqli_error($conn,$sql2);
                  // echo "<script>alert('horsey')</script>";
                }
                ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!--   Recent Sales End -->



      <!-- Widgets Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
          
          <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-secondary rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Calender</h6>
                <a href="">Show All</a>
              </div>
              <div id="calender"></div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-8">
            <div class="h-100 bg-secondary rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Report Here</h6>
                <a href="">Show All</a>
              </div>
              <form action="reporthandle.php" method="POST" enctype="multipart/form-data" >
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Ph</span>
                  <input type="text" class="form-control" placeholder="contact" aria-label="contact" aria-describedby="basic-addon1" name ="contact" value = "<?php echo $_SESSION['contact']?>">
                  <!-- <input type="hidden" value="<?php //echo $id;?>" name="id"> -->
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">@</span>
                  <input type="text" class="form-control" placeholder="location"  aria-describedby="basic-addon1" name ="location">
                  
                </div>
                <div class="input-group mb-3">
                <select name="type"  class="form-control" id="floatingText">
                    <?php 
                    include_once "connection.php";
                    $sql="SELECT * FROM cime_type";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                      while($row=mysqli_fetch_array($result)){ 
                        
                    ?>
                    <option value="<?php echo $row['crime_id'];?>" class="form-control" id="floatingText"><?php echo $row['crime']; ?></option>
                    <?php }}
                    else{
                      $error=mysqli_error($conn);
                      echo "<script>alert('$error')</script>";
                    } ?>
                </select>
                </div>

                <!--  <div class="d-flex mb-2">
                <input class="form-control bg-dark border-0" type="text" placeholder="Enter task">
                <button type="button" class="btn btn-primary ms-2">Add</button>
              </div>-->
                <input type="file" class="form-control" name="fimage">
                <br>
                <div class="form-floating">
                  <textarea class="form-control" placeholder="What happened?" id="floatingTextarea" style="height: 150px;"name="report"></textarea>
                  <label for="floatingTextarea">Type your report</label>
                </div>

                <br><button type="submit" class="btn btn-primary" name="submit">Send</button>
                <button type="reset" class="btn btn-info">Reset</button>
              </form>
            </div>


          </div>

        </div>
      </div>
      <!-- Widgets End -->


      <!-- Footer Start -->
   
      <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/chart/chart.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>
<?php
}
  
else{
  echo "error";
}
?>