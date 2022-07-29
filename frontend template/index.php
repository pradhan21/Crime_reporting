<?php

    include_once "logics/latestpost.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crime News</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="jquery-3.6.0.js"></script>
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

    <link rel="stylesheet" href="css/style.css">
    <style>
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 40px;
            color: black;
            border: none;
            outline: none;
            cursor: pointer;
            background: none;
        }
        
        
        #myBtn1 {
            display: inline;
            position: fixed;
            bottom: 100px;
            font-size: 40px;
            color: #990000;
            right: 30px;
            z-index: 90;
            border: none;
            outline: none;
            cursor: pointer;
            background: none;
        }
        

    </style>
</head>

<body onload="getLocation();">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle-fill"></i></button>
    <form action="sendlocation.php" class="myForm" method="post" autocomplete="off">
        <input type="hidden" name="latitude" required value="">
        <input type="hidden" name="longitude" required value=""><br>
        <button type="submit" id="myBtn1" title="Emergency" name="submit"><i class="bi bi-exclamation-octagon-fill"></i></button>
    </form>

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

                        <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">Crime Daily</a></h1>
                    </div>

                    <div class="col-6 mr-auto py-3 text-right" style="position: relative; top: 3px;">
                        <div class="social-icons d-inline">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-instagram"></span></a>
                        </div>
                        <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-xl-none"><span class="icon-menu h3"></span></a></div>
                </div>

                <div class="col-12 d-none d-xl-block border-top nav_pos">
                    <nav class="site-navigation text-center " role="navigation">

                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block mb-0">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="has-children">
                                <a href="#">Login/Register</a>
                                <ul class="dropdown">
                                    <li><a href="login/login.php">Login</a></li>
                                    <li><a href="../dashboard user/login/signup.php">Signup</a></li>
                                   <!-- <li><a href="../dashboard admin(police)/signup.php">Signup-admin</a></li>-->
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

    </div>
    </header>


    <div class="slide-one-item home-slider owl-carousel">


        <div class="site-cover site-cover-sm same-height overlay" style="background-image: url('images/crime_side1.jpg');">
            <div class="container">
                <div class="row same-height align-items-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="post-entry">
                            <span class="post-category text-white bg-danger mb-3">NEWS</span>
                            <h2 class="mb-4"><a style = "text-decoration:line-through;" href="#">Say No To Crime</a></h2>
                            <div class="post-meta align-items-center text-left">
                                <span class="d-inline-block mt-1">By Carrol Atkinson</span>
                                <span>&nbsp;-&nbsp; February 10, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-cover site-cover-sm same-height overlay" style="background-image: url('images/crime_side2.jpg');">
            <div class="container">
                <div class="row same-height align-items-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="post-entry">
                            <span class="post-category text-white bg-danger mb-3">NEWS</span>
                            <h2 class="mb-4"><a style = "text-decoration:line-through;" href="#">Say Not To Crime</a></h2>
                            <div class="post-meta align-items-center text-left">
                                <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>
                                <span class="d-inline-block mt-1">By Carrol Atkinson</span>
                                <span>&nbsp; February 10, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

        <!-- End of Crousel -->

    <div class="site-section">
        <div class="container">

            <div class="row align-items-stretch retro-layout">
            
                <div class="col-md-5">
                <?php foreach($cyber as $c){ ?>
                    <a href="single.php?b_id=<?php echo $c['blog_id'];?>" class="hentry img-1 h-100 gradient" style="background-image: url('http://localhost/crime_reporting/dashboard%20user/<?=$c['featured_image']; ?>');">
                        <span class="post-category text-white bg-danger">BREAKING NEWS</span>
                        <div class="text text-sm">
                            <h2><strong><?php echo $c['title']; ?> </strong></h2>
                            <span>&nbsp; <i class="bi bi-pencil-fill"></i> <?php echo $c['date_col']; ?></span>
                        </div>
                    </a>
                <?php
                }
                ?>
                </div>
            

                <div class="col-md-7">

                    <?php foreach($fraud as $f){ ?>
                    <a href="single.php?b_id=<?php echo $f['blog_id'];?>" class="hentry img-2 v-height mb30 gradient" style="background-image: url('http://localhost/crime_reporting/dashboard%20user/<?=$f['featured_image']; ?>');">
                        <span class="post-category text-white bg-success">Business Fraud</span>
                        <div class="text text-sm">
                            <h2><strong><?php echo $f['title']; ?></strong></h2>
                            <span>&nbsp; <i class="bi bi-pencil-fill"></i> <?php echo $f['date_col']; ?></span>
                        </div>
                    </a>
                    <?php
                    }
                    ?>

                    <div class="two-col d-block d-md-flex">
                        <?php foreach($murder as $m){ ?>
                        <a href="single.php?b_id=<?php echo $m['blog_id'];?>" class="hentry v-height img-2 gradient" style="background-image: url('http://localhost/crime_reporting/dashboard%20user/<?=$m['featured_image']; ?>');">
                            <span class="post-category text-white bg-danger">Murder</span>
                            <div class="text text-sm">
                                <h2><strong><?php echo $m['title']; ?></strong></h2>
                                <span>&nbsp; <i class="bi bi-pencil-fill"></i> <?php echo $m['date_col']; ?></span>
                            </div>
                        </a>
                        <?php
                        }
                        ?>

                        <?php foreach($kidnap as $k){ ?>
                        <a href="single.php?b_id=<?php echo $k['blog_id'];?>" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('http://localhost/crime_reporting/dashboard%20user/<?=$k['featured_image']; ?>');">
                            <span class="post-category text-white bg-warning">Kidnapping</span>
                            <div class="text text-sm">
                                <h2><strong><?php echo $k['title']; ?></strong></h2>
                                <span>&nbsp; <i class="bi bi-pencil-fill"></i> <?php echo $k['date_col']; ?></span>
                            </div>
                        </a>
                        <?php
                        }
                        ?>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 section-heading">
                    <h2>Popular Posts</h2>
                </div>
            </div>
            <div class="row">
            <?php foreach($kidnap as $k){ ?>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="entry2">
                        <a href="single.php?b_id=<?php echo $k['blog_id'];?>"><img src="http://localhost/crime_reporting/dashboard%20user/<?=$k['featured_image']; ?>" alt="Image" class="img-fluid rounded"></a>
                        <span class="post-category text-white bg-primary mb-3">News</span>
                        <h2><a href="single.php?b_id=<?php echo $k['blog_id'];?>"><strong><?php echo $k['title']; ?></strong></a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <span class="d-inline-block mt-1"><i class="bi bi-person-fill"></i> <a href="#"><?php echo $k['author']; ?></a></span>
                            <span>&nbsp; <i class="bi bi-pencil-fill"></i> <?php echo $k['date_col']; ?></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
                    </div>
                </div>
                <?php
                }
                ?>
                <div class="col-lg-6 pl-lg-4">
                
                <?php foreach($date as $d){ ?>
            
                    <div class="entry3 d-block d-sm-flex">
                        <figure class="figure order-2">
                            <a href="single.php?b_id=<?php echo $d['blog_id'];?>"><img src="http://localhost/crime_reporting/dashboard%20user/<?=$d['featured_image']; ?>" alt="Image" class="img-fluid rounded"></a>
                        </figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-primary mb-3">News</span>
                            <h2><a href="single.php?b_id=<?php echo $d['blog_id'];?>"><strong><?php echo $d['title']; ?></strong></a></h2>
                            <span class="post-meta mb-3 d-block">&nbsp; <i class="bi bi-pencil-fill"></i> <?php echo $d['date_col']; ?></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio.</p>
                        </div>
                    </div>
                <?php
                }
                ?>


                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row">
            <?php foreach($random as $r){ ?>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="entry2 mb-5">
                        <a href="single.php?b_id=<?php echo $r['blog_id'];?>"><img src="http://localhost/crime_reporting/dashboard%20user/<?=$r['featured_image']; ?>" alt="Image" class="img-fluid rounded related_img"></a>
                        <br>
                        <span class="post-category text-white bg-primary mb-3">News</span>
                        <h2><a href="single.php?b_id=<?php echo $r['blog_id'];?>"><?php echo $r['title']; ?></a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <span class="d-inline-block mt-1"><i class="bi bi-person-fill"></i> <a href="#"><?php echo $r['author']; ?></a></span>
                            <span>&nbsp; <i class="bi bi-pencil-fill"></i> <?php echo $r['date_col']; ?></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio. laborum error in eum id veritatis quidem neque nesciunt at architecto nam ullam, officia unde dolores officiis veniam</p>
                    </div>     
                </div>
            <?php
            }
            ?>
            </div>
            <br/>

            <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="entry4 d-block d-sm-flex">
                        <figure class="figure order-2">
                            <a href="single.php?b_id=<?php echo $q['blog_id'];?>"><img src="http://localhost/crime_reporting/dashboard%20user/<?=$q['featured_image']; ?>" alt="Image" class="img-fluid rounded"></a>
                        </figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-danger mb-3">NEWS</span>
                            <h2><a href="single.php?b_id=<?php echo $q['blog_id'];?>"><?php echo $q['title']; ?></a></h2>
                            <span class="post-meta mb-3 d-block"><i class="bi bi-pencil-fill"></i> <?php echo $q['date_col']; ?></span>
                        </div>
                    </div>     
                </div>
            <?php
            }
            ?>
            </div>

        </div>
    </div>

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
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }

        function showPosition(position) {
            document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
            document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    alert("You must allow the request  for Geolocation to fill out the form");
                    location.reload();
                    break;

            }
        }
    </script>
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