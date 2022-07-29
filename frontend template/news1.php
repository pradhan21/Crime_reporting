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
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
     <!-- bootstrap CDN -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
     
     <!-- ajax for search bar -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


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
                        <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">Crime News</a></h1>
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
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="news.php">News</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="has-children">
                                <a href="#">Login/Register</a>
                                <ul class="dropdown">
                                    <li><a href="login/login.php">Login</a></li>
                                    <li><a href="login/signup.php">Signup</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

    </div>
    </header>


    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('images/abuse.png');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <span class="post-category text-white bg-success mb-3">News</span>
                        <h1 class="mb-4"><a href="#">Crimes' Category</a></h1>
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
                        <a href="single.php?b_id=<?php echo $q['blog_id'];?>"><img src="http://localhost/crime_reporting/dashboard%20user/<?=$q['featured_image']; ?>" alt="Image" class="img-fluid rounded" style="width:95%; "></a>
                        <br>
                        <span class="post-category text-white bg-primary mb-3">News</span>
                        <h2><a href="single.php?b_id=<?php echo $q['blog_id'];?>"><?php echo $q['title']; ?> </a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <span class="d-inline-block mt-1">By <i class="bi bi-person-fill"></i> <a href="#"><?php echo $q['author']; ?></a></span>
                            <span>&nbsp;&nbsp; <i class="bi bi-pencil-fill"></i> <?php echo $q['date_col']; ?></span>
                        </div>
                    </div>
                
                    
                <?php 
                }
                ?>


                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap">
                            <div class="d-md-flex ms-4">                            
                                <input class="form-control search_bar" type="text" name = "input" class="form-control" id="live_search" placeholder="Search hear" required>
                            </div>
                    </div>
                    <!-- END sidebar-box -->
                    <!-- search bar -->
                    <div id="searchresult"></div>
                    <script type = "text/javascript">
                        $(document).ready(function(){
                            $("#live_search").keyup(function(){
                                var input = $(this).val();
                                // alert(input);
                                if(input !=""){
                                    $.ajax({
                                        url:"logics/livesearch.php",
                                        method: "POST",
                                        data: {input:input},

                                        success:function(data){
                                            $("#searchresult").html(data);
                                        }
                                    });
                                }else{
                                    // $("#searchresult").css("display", "none");
                                    $("#searchresult").html("");
                                }
                            });
                        });
                    </script>
                    <!-- search end -->

                    <div class="sidebar-box">
                        <h3 class="heading">Latest Posts</h3>
                        
                        <!-- Crousal -->
                        <div id="carouselExampleIndicators" class="carousel slide dasher" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                    $i = 0;
                                    foreach($date as $d){
                                        $actives = '';
                                        if($i == 0){
                                            $actives = 'active';
                                        }
                                
                                ?>

                                <div class="carousel-item <?=$actives ; ?>">
                                    <div class="card" style="width: 18rem;">
                                        <img src="http://localhost/crime_reporting/dashboard%20user/<?=$d['featured_image']; ?>" class="card-img-top" style="width:100%; height:180px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><a class="text-dark" href="single.php"> <?php echo $d['title']; ?> </a></h5>
                                            <p class="card-text">By <a href="#"><?php echo $d['author']; ?></a> <small class="text-muted">&nbsp;-&nbsp; <?php echo $d['date_col']; ?></small></p>
                                            <a href="single.php?b_id=<?php echo $d['blog_id'];?>" class="btn btn-dark">Read More...</a>
                                            
                                        </div>
                                    </div>


                                </div>
                                <?php $i++; 
                                    } ?>
                            </div>
                            <a class="carousel-control-prev text-dark" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
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
                            <li><a href="#">CyberCrime</a></li>
                            <li><a href="#">Fruad</a></li>
                            <li><a href="#">Hacking</a></li>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login/login.php">LogIn</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="mb-5">
                        <h3 class="footer-heading mb-4">Subscribe</h3>
                        <p>If you want to be Stay updated with us through e-mail, please do subscribe to our website!</p>
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
                        </script> All rights reserved
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