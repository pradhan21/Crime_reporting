<?php include_once "header.php";?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="../../frontend template/index.php" class="">
                                <h5 class="text-primary"><i class="fa fa-user-edit me-2"></i>Crime Daily</h5>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <form method="POST" action="registerhandle.php">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="fname" id="floatingText" placeholder="First Name" required>
                                <label for="floatingText">First Name</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" name="lname"id="floatingText" placeholder="Last Name"required>
                                <label for="floatingText">Last Name</label>
                            </div>
                                <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com"required>
                                <label for="floatingInput">Email Address</label>
                            <?php if(isset($_GET['err1'])){ ?>
                                <div class="alert alert-dark alert-dismissible fade show " role="alert"> 
                                <i class="fa fa-exclamation-circle me-2"></i>
                                    <?php echo $_GET['err1'];?> 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>  
                            <?php } ?><br>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control"name="contact_no" id="floatingText" placeholder="Contact No."required>
                                <label for="floatingText">Contact Number</label>
                            </div>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control"name="username" id="floatingText" placeholder="Username"required>
                                <label for="floatingText">Username</label>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control"name="password" id="floatingPassword" placeholder="Password"required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control"name="id" id="floatingText" placeholder="000-0000-000000"required>
                                <label for="floatingText">Citizenship Id/Passwport Id</label>
                                <?php
                                if(isset($_GET['err'])){ ?>
                                    <div class="alert alert-dark alert-dismissible fade show " role="alert"> 
                                <i class="fa fa-exclamation-circle me-2"></i>
                                   <?php echo $_GET['err'];?> 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>  
                            <?php } ?>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control"name="city" id="floatingText" placeholder="Kathmandu"required>
                                <label for="floatingText">City</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control"name="address" id="floatingText" placeholder="Tahachal, Kathmandu"required>
                                <label for="floatingText">Address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <select name="station"  class="form-control" id="floatingText">
                                    <?php 
                                    include_once "connection.php";
                                    $sql="SELECT * FROM police_station";
                                    $result=mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)>0){
                                    while($row=mysqli_fetch_array($result)){ 
                                        
                                    ?>
                                    <option value="<?php echo $row['station_id'];?>" class="form-control" id="floatingText"><?php echo $row['station_name']; ?></option>
                                    <?php }} ?>
                                </select>
                                
                            </div>

                            <button type="submit" name="Submit" value="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                            
                        </form>
                        <p class="text-center mb-0">Already have an Account? <a href="login.php" onclick="mfunction()"  >Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
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
   
    <script src="js/main.js">

    </script>
</body>
</html>