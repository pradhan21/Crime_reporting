<?php
    SESSION_start();
    // include "../dashboard user/logics/bloglogic.php"
    include "logics/bloglogic.php";
    if(isset($_SESSION['id']) && isset($_SESSION['fname']) && isset($_SESSION['lname']) && isset($_SESSION['lname'])){
        include "connection.php";  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Crime Daily </title>
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

    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- ajax for search bar -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




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
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['lname'] ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <!-- <div class="nav-item dropdown">
                       <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div> -->
                   <!--<a href="widget.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>-->
                    <a href="blog.php" class="nav-item nav-link active"><i class="fa fa-chart-bar me-2"></i>Blog/News</a>
                    <a href="user.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Users</a>
                    <a href="Criminal_details_form.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Add Station</a>
                    <a href="widget.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Track Cases</a>
                    <!-- <a href="blogpost.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Blog Post</a> -->
                   <!-- <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Table</a>-->
                  <!--  <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>-->
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item active">Blank Page</a>
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
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- <form class="d-none d-md-flex ms-4" method = "GET"> -->
                    &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-control bg-dark border-0" name="search" id="search_text" type="search" placeholder="Search..." required>
                    <button type="submit" class="btn border-0"><i class="bi bi-search"></i></button>
                <!-- </form> -->
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
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
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
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
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['lname'] ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="../frontend template/login/logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blog Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="container-fluid bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="container-fluid">
                        <!-- <br/> -->
                        
                    
                        <div class="col-12 format" id="div1">
                            
                            <form method="POST" enctype = "multipart/form-data">   
                                <br/>
                                <h1>Blog Post</h1>                             
                                <label for="blogTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" name="blogTitle" required>
                                
                                <label for="subTitle" class="form-label">Sub-Title</label>
                                <input type="text" class="form-control" name="subTitle">

                                <label for="author" class="form-label">Written by</label>
                                <input type="text" class="form-control" name="author">
                                
                                <label for="fimage" class="form-label">Featured Image</label>
                                <input type="file" class="form-control" name="fimage" required>
                                
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control tarea" name="description" rows="8" required></textarea>
                                
                                <label for="addimage" class="form-label">Additional Image</label>
                                <input type="file" class="form-control" name="addimage">

                                <label for="opt_description" class="form-label">Optional Description</label>
                                <textarea class="form-control tarea" name="opt_description" rows="6"></textarea>

                                <br/>
                                <button name="blog_insert" type="submit" class="btn btn-success" id = "btn-submit" onsubmit="myFunction()">Submit</button>
                                <button type="reset" class="btn btn-info">Reset</button>
                                <button name="blog_insert" type="button" class="btn btn-light" id = "btn-submit" onclick="myFunction()">Go Back</button>

                                <!-- <a href="blog.php" class="btn btn-light">Cancel / Go Back</a> -->
                                <br/>
                                <br/>
                            </form> 

                            <?php if(isset($_REQUEST['info'])){?>
                                <?php if($_REQUEST['info'] == "added"){?> 
                                
                                    <div class="alert alert-success" role="alert">Post Added</div>
                                <?php } ?>
                            <?php } ?>

                        </div>                           
                    </div>
                    
                </div>

                <!-- Table start -->
                <div class="row g-4" id= "div2">
                    <div class="col-12">
                        
                        <button class="btn btn-success" id = "btn-tog">Create New Post</button>
                        <br/>
                        <br/>
                        <div class="bg-secondary rounded h-100 p-4">
                            <h1 class="mb-4">Published Post List</h1>
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="table-data">
                                    <thead class=" table-light">
                                        <tr>
                                            <th scope="col">Blog_Id</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Published Date</th>
                                            <th scope="col">Image</th>
                                            <!-- <th scope="col">added Image</th> -->
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    
                                    <!-- Using loop to get recorded blog from database -->
                                    <?php foreach($query as $q) { ?> 
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $q['blog_id']; ?></th>
                                            <td><?php echo $q['title']; ?></td>
                                            <td><?php echo $q['date_col']; ?></td>
                                            <td><img class="table_image" src="http://localhost/crime_reporting/dashboard%20user/<?=$q['featured_image']; ?> "></td>
                                            <!-- <td><img class="table_image" src="http://localhost/crime_reporting/dashboard%20user/<?=$q['add_image']; ?> "></td> -->
                                            <form action = "updatedata.php" method="POST">
                                                <input type="hidden" name = "id" value = "<?php echo $q['blog_id']; ?>">
                                                <td><input type="submit" name = "edit" class="btn btn-info" value="Edit"></td>
                                            </form>

                                            <form method="POST">
                                                <input type="hidden" name = "id" value = "<?php echo $q['blog_id']; ?>">
                                                <td><input type="submit" name = "delete" class="btn btn-danger" value="Delete"></td>
                                            </form>
                                        
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="js/toggle.js"></script>    
                <!-- Table end -->
            </div>
            <!-- Blog End -->
            

            <!-- Footer Start -->
            
            <!-- Footer End -->
        </div>
        <!-- Content End -->
        <script type="text/javascript">
            $(document).ready(function(){
                $("#search_text").keyup(function(){
                    var input = $(this).val();
                        $.ajax({
                            url:"action.php",
                            method: "POST",
                            data: {input:input},

                            success:function(response){
                                $("#table-data").html(response);
                            }
                        });
                });
            });
        </script>


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