<?php

    include_once "logics/bloglogic.php";
    include_once "logics/latestpost.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crime Reporter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar pt-3" role="banner">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-6 logo">
                        <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">Crime Reporter</a></h1>
                    </div>

                    <div class="col-6 mr-auto py-3 text-right" style="position: relative; top: 3px;">
                        <div class="social-icons d-inline">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-instagram"></span></a>
                        </div>
                        <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-xl-none"><span class="icon-menu h3"></span></a></div>
                </div>

                <div class="col-12 d-none d-xl-block border-top">
                    <nav class="site-navigation text-center " role="navigation">

                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block mb-0">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><a href="news.php">News</a></li>
                            <li><a href="news.php">Technology</a></li>
                            <li class="has-children">
                                <a href="category.html">Login/Register</a>
                                <ul class="dropdown">
                                    <li><a href="../main dashboard/login.php">Login</a></li>
                                    <li><a href="../main dashboard/signup.php">Signup</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

    </div>
    </header>


    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <span class="post-category text-white bg-success mb-3">Nature</span>
                        <h1 class="mb-4"><a href="#">'Nature' Category</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="site-section py-lg">
        <div class="container">

            <div class="row blog-entries element-animate mb-5">

                <div class="col-md-12 col-lg-8 main-content">

                <?php foreach($query as $q){ ?>
                    

                    <div class="entry2 mb-5">
                        <a href="single.html"><img class="blog_img" src="http://localhost/crime_reporting/dashboard%20user/<?=$q['featured_image']; ?>" alt="Image" class="img-fluid rounded"></a>
                        <span class="post-category text-white bg-primary mb-3">News</span>
                        <h2><a href="single.html"><?php echo $q['title']; ?> </a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <span class="d-inline-block mt-1">By <a href="#"><?php echo $q['author']; ?></a></span>
                            <span>&nbsp;-&nbsp; <?php echo $q['date_col']; ?></span>
                        </div>
                        <!-- <p><?php echo $q['description1']; ?> <br/> <br/></p> -->
                    </div>
                
                    
                <?php 
                }
                ?>


                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Latest Posts</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                <?php foreach($latest as $q){ ?>
                                    <li>
                                        <a href="">
                                            <img src="http://localhost/crime_reporting/dashboard%20user/<?=$q['featured_image']; ?>" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4><?php echo $q['title']; ?> </h4>
                                                <div class="post-meta">
                                                    <span class="mr-2"><?php echo $q['date_col']; ?> </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <?php 
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Tags</h3>
                        <ul class="tags">
                            <li><a href="#">Crime</a></li>
                            <li><a href="#">Kidnapping</a></li>
                            <li><a href="#">Murder</a></li>
                            <li><a href="#">Threats</a></li>
                            <li><a href="#">Ransom</a></li>
                            <li><a href="#">Harrsement</a></li>
                            <li><a href="#">Criminal</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>



    <div class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3 class="footer-heading mb-4">About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi,
                        architecto.
                    </p>
                </div>
                <div class="col-md-3 ml-auto">
                    <h3 class="footer-heading mb-4">Quick Menu</h3>
                    <ul class="list-unstyled float-left mr-5">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Subscribes</a></li>
                    </ul>
                    <ul class="list-unstyled float-left">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Nature</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="mb-5">
                        <h3 class="footer-heading mb-4">Subscribe</h3>
                        <form action="" method="post" class="form-footer-subscribe">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control">
                                <input type="submit" class="btn btn-primary text-white" value="Subscribe">
                            </div>
                        </form>
                    </div>

                    <div>
                        <h3 class="footer-heading mb-4">Connect With Us</h3>
                        <p>
                            <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                            <a href="#"><span class="icon-twitter p-2"></span></a>
                            <a href="#"><span class="icon-instagram p-2"></span></a>
                            <a href="#"><span class="icon-rss p-2"></span></a>
                            <a href="#"><span class="icon-envelope p-2"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>