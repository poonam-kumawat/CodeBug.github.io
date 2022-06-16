<!DOCTYPE html>
<html lang="en">

<head> 
    
    <?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
    <?php include 'css/courses.php'; ?>
    <?php include 'css/about.php'; ?>
    <?php include 'css/bloggrid.php'; ?>
    <?php include 'css/contactus.php'; ?>
    <?php include 'css/coursesdetails.php'; ?>
  	<?php include 'JavaScript/javascript.php'; ?>
    <title>Courses</title>
    
</head>

<body>

     <!-- header section start -->
     <div class="main-wrapper">
    <!-- Header Section Start -->
    <div class="header-section">

        <!-- Header Main Start -->
        <div class="header-main sticky">
            <div class="container">

                <!-- Header Main Start -->
                <div class="header-main-wrapper">

                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="index.php"><img src="Images/logo1.png" alt="Logo"></a>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="header-menu d-none d-lg-block">
                        <ul class="nav-menu">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="menu-item-has-children">
                                <a href="index.php">Courses</a>
                                <ul class="sub-menu">
                                    <li><a href="courses.php">Courses</a></li>
                                    <li><a href="coursesdetails.php">Courses Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="bloggrid.php">Blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="bloggrid.php">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid.php">Blog</a></li>
                                            <li><a href="blog-right-sidebar.php">Blog Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog Details</a>
                                        <ul class="sub-menu">
                                            <li><a href="blogrightside.php">Blog Details Right
                                                    Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contactus.php">Contact</a></li>
                        </ul>

                    </div>
                    <!-- Header Menu End -->

                    <!-- Header Sing In & Up Start -->
                    <div class="header-sign-in-up d-none d-lg-block">
                        <ul>
                            <li><a class="sign-in" href="login.php">Login</a></li>
                            <li><a class="sign-up" href="Registration.php">Sign Up</a></li>
                        </ul>
                    </div>
                    <!-- Header Sing In & Up End -->

                    <!-- Header Mobile Toggle Start -->
                    <div class="header-toggle d-lg-none">
                        <a class="menu-toggle" href="javascript:void(0)">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <!-- Header Mobile Toggle End -->

                </div>
                <!-- Header Main End -->

            </div>
        </div>
        <!-- Header Main End -->

    </div>
    <!-- Header Section End -->
</header>
    <!-- Mobile Menu Start -->
    <div class="mobile-menu">

        <!-- Menu Close Start -->
        <a class="menu-close" href="javascript:void(0)">
            <i class="icofont-close-line"></i>
        </a>
        <!-- Menu Close End -->


        <!-- Mobile Sing In & Up Start -->
        <div class="mobile-sign-in-up">
            <ul>
                <li><a class="sign-in" href="login.php">Login</a></li>
                <li><a class="sign-up" href="Registration.php">Sign Up</a></li>
            </ul>
        </div>
        <!-- Mobile Sing In & Up End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-items">
            <ul class="nav-menu">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="menu-item-has-children"><span class="mobile-menu-expand"></span>
                    <a href="#course">All Course</a>
                    <ul class="sub-menu" style="display: none;">
                        <li><a href="courses.php">Courses</a></li>
                        <li><a href="courses-details.php">Courses Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><span class="mobile-menu-expand"></span>
                    <a href="#">Pages </a>
                    <ul class="sub-menu" style="display: none;">
                        <li><a href="about.php">About</a></li>
                        <li><a href="Registration.php">Registration</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="after-enroll.php">After Enroll</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><span class="mobile-menu-expand"></span>
                    <a href="#">Blog</a>
                    <ul class="sub-menu" style="display: none;">
                        <li class="menu-item-has-children"><span class="mobile-menu-expand"></span>
                            <a href="bloggrid.php">Blog</a>
                            <ul class="sub-menu" style="display: none;">
                                <li><a href="bloggrid.php">Blog</a></li>
                                <li><a href="bloggrid.php">Blog Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="mobile-menu-expand"></span>
                            <a href="bloggrid.php">Blog Details</a>
                            <ul class="sub-menu" style="display: none;">
                                <li><a href="bloggrid.php">Blog Details Right Sidebar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

        </div>
        <!-- Mobile Menu End -->

        <!-- Mobile Menu End -->
        <div class="mobile-social">
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <!-- Mobile Menu End -->

    </div>
    <!-- Mobile Menu End -->

    <!-- Overlay Start -->
    <div class="overlay"></div>
    <!-- Overlay End -->

    <!-- header section End -->

    
    <!-- Page Banner Start -->

    <section class="page-banner">
        <img class="shape-1 " src="images/shape-8.webp" alt="Shape">
        <!-- <img class="shape-2" src="images/shape-23.webp" alt="Shape"> -->
        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <ul class="breadcrumb fs-2">
                    <li><a href="#">Home</a> // </li>
                    <li class="active">Courses</li>
                </ul>
                <h2 class="title">My <span> Courses</span></h2>
            </div>
            <!-- Page Banner End -->
        </div>

        <div class="shape-icon-box">

            <img class="icon-shape-1 animation-left" src="images/shape-5.webp" alt="Shape">

            <div class="box-content">
                <div class="box-wrapper">
                    <i class="fa fa-certificate"></i>
                </div>
            </div>

            <img class="icon-shape-2" src="images/shape-6.webp" alt="Shape">
            <!-- <img class="shape-3" src="images/shape-24.webp" alt="Shape"> -->
            <img class="shape-author" src="images\author-11.webp" alt="Shape">
        </div>
        </div>
    </section>

    <!-- Page Banner End -->

    <!-- course Start -->


    <div class="section section-padding mt-n10">
        <div class="container">

            <!-- course Wrapper Start -->
            <div class="blog-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">

                        <!-- Single course Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="coursesdetails.php"><img src="assets/images/courses/php.jpg" alt="Blog"></a>

                            </div>
                            <div class="blog-content">
                                <div class="blog-author">
                                    <div class="author">
                                        <div class="author-thumb">
                                            <a href="#"><img src="assets/images/author/traversyauthor.jpg" alt="Author"></a>

                                        </div>
                                        <div class="author-name">
                                            <ul class="name">
                                                <li><a href="#">Traversy Media</a><span>
                                            </ul>

                                        </div>
                                    </div>

                                </div>

                                <h4 class="title"><a href="coursesdetails.php">PHP Front To Back  - Series full course of PHP
                                            Learn with traversy media</a></h4>
                                
                                <hr class="line">
                                <div class="blog-meta">
                                    <span> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <h5>Ratings</h5>


                                </div>


                            </div>
                        </div>
                        <!-- Single course End -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single course Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="java.php"><img src="assets/images/courses/java.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-author">
                                    <div class="author">
                                        <div class="author-thumb">
                                            <a href="#"><img src="assets/images/author/apnacollege.jpg" alt="Author"></a>
                                        </div>
                                        <div class="author-name">
                                            <ul class="name">
                                                <li><a href="java.php">Apna College</a><span>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <h4 class="title"><a href="java.php">Introduction to Java Language | Lecture 1 | Complete Placement Course</a></h4>

                              
                                <hr class="line">
                                <div class="blog-meta">
                                    <span> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <h5> Ratings</h5>


                                </div>
                            </div>
                        </div>
                        <!-- Single course End -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single course Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="htmlcss.php"><img src="assets/images/courses/htmlcss.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-author">
                                    <div class="author">
                                        <div class="author-thumb">
                                            <a href="#"><img src="assets/images/author/htmlcss.png" alt="Author"></a>
                                        </div>
                                        <div class="author-name">
                                            <ul class="name">
                                                <li><a href="#">The net ninja</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <h4 class="title"><a href="htmlcss.php">HTML & CSS Crash Course Tutorial To Learn Web Devlopment</a></h4>

                            
                                <hr class="line">
                                <div class="blog-meta">
                                    <span> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <h5>Your Ratings</h5>


                                </div>
                            </div>
                        </div>
                        <!-- Single course End -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single course Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="nodejs.php"><img src="assets/images/courses/nodejs.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-author">
                                    <div class="author">
                                        <div class="author-thumb">
                                            <a href="#"><img src="assets/images/author/nodejs.png" alt="Author"></a>
                                        </div>
                                        <div class="author-name">
                                            <ul class="name">
                                                <li><a href="#">Telusko</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <h4 class="title"><a href="nodejs.php">Node js Series: Learn  What is Node js? | Simplified Explanation</a></h4>

             
                                <hr class="line">
                                <div class="blog-meta">
                                    <span> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <h5>Your Ratings</h5>


                                </div>
                            </div>
                        </div>
                        <!-- Single course End -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single course Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="react.php"><img src="assets/images/courses/react.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-author">
                                    <div class="author">
                                        <div class="author-thumb">
                                            <a href="#"><img src="assets/images/author/react.jpeg" alt="Author"></a>
                                        </div>
                                        <div class="author-name">
                                            <ul class="name">
                                                <li><a href="#">Tech with tim</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <h4 class="title"><a href="react.php">React Full Course:React For Beginners To Learn just click Enroll.</a></h4>
                                
                                <hr class="line">
                                <div class="blog-meta">
                                    <span> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <h5>Your Ratings</h5>


                                </div>
                            </div>
                        </div>
                        <!-- Single course End -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single course Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="angular.php"><img src="assets/images/courses/angular.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-author">
                                    <div class="author">
                                        <div class="author-thumb">
                                            <a href="#"><img src="assets/images/author/angular.jpg" alt="Author"></a>
                                        </div>
                                        <div class="author-name">
                                            <ul class="name">
                                                <li><a href="#">Simplilearn</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <h4 class="title"><a href="angular.php">Angular Tutorial For Beginners| What Is Angular And How It Works? | Simplilearn</a></h4>
                                
                                <hr class="line">
                                <div class="blog-meta">
                                    <span> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <h5>Your Ratings</h5>


                                </div>
                            </div>
                        </div>
                        <!-- Single course End -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single course Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="django.php"><img src="Images/django.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-author">
                                    <div class="author">
                                        <div class="author-thumb">
                                            <a href="#"><img src="Images/djangoauth.jpg" alt="Author"></a>
                                        </div>
                                        <div class="author-name">
                                            <ul class="name">
                                                <li><a href="#">corey schafer </a> </li>
                                                
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <h4 class="title"><a href="django.php">Python Django Tutorial: Full-Featured Web App</a></h4>
                                
                                <hr class="line">
                                <div class="blog-meta">
                                    <span> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <h5>Your Ratings</h5>


                                </div>
                            </div>
                        </div>
                        <!-- Single course End -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single course Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="mongodb.php"><img src="Images/mongodb.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-author">
                                    <div class="author">
                                        <div class="author-thumb">
                                            <a href="#"><img src="Images/mongodblogo.jpeg" alt="Author"></a>
                                        </div>
                                        <div class="author-name">
                                            <ul class="name">
                                                <li><a href="mongodb.php">ProgrammingKnowledge</a> </li>
                                                
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <h4 class="title"><a href="mongodb.php">MongoDB Tutorial for Beginners 1 - Introduction to MongoDB </a></h4>
                                
                                <hr class="line">
                                <div class="blog-meta">
                                    <span> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <h5>Your Ratings</h5>


                                </div>
                            </div>
                        </div>
                        <!-- Single course End -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single course Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="mysql.php"><img src="Images/mysql.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-author">
                                    <div class="author">
                                        <div class="author-thumb">
                                            <a href="#"><img src="Images/mysqllogo.jpg" alt="Author"></a>
                                        </div>
                                        <div class="author-name">
                                            <ul class="name">
                                                <li><a href="#">Krish Naik</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <h4 class="title"><a href="mysql.php">MySQL With Python And Data Science Laern Mysql Easily</a></h4>

                                
                                <hr class="line">
                                <div class="blog-meta">
                                    <span> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <h5>Your Ratings</h5>


                                </div>
                            </div>
                        </div>
                        <!-- Single course End -->

                    </div>
                </div>
            </div>
            <!-- course Wrapper End -->



        </div>
    </div>


    <!-- Course End -->


    <!-- Download App Start -->


    <div class="section section-padding download-section">

        <div class="app-shape-1"></div>
        <div class="app-shape-2"></div>
        <div class="app-shape-3"></div>
        <div class="app-shape-4"></div>

        <div class="container">

            <!-- Download App Wrapper Start -->
            <div class="download-app-wrapper mt-n6">

                <!-- Section Title Start -->
                <div class="section-title section-title-white">
                    <h5 class="sub-title">Ready to start?</h5>
                    <h2 class="main-title">Download our mobile app. <br> for easy to start your course.</h2>
                </div>
                <!-- Section Title End -->

                <img class="shape-1 animation-right" src="Images/shape-14.webp" alt="Shape">

                <!-- Download App Button End -->
                <div class="download-app-btn">
                    <ul class="app-btn">
                        <li><a href="#"><img src="Images/google-play.webp" alt="Google Play"></a></li>
                        <li><a href="#"><img src="Images/app-store.webp" alt="App Store"></a></li>
                    </ul>
                </div>
                <!-- Download App Button End -->

            </div>
            <!-- Download App Wrapper End -->

        </div>
    </div>


    <!-- Download App End -->


    <!-- scroll button -->

    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out"
        data-abc="true"></a>

    <!-- scroll button end -->


    <!-- Footer start -->



    <div class="section footer-section">

        <!-- Footer Widget Section Start -->
        <div class="footer-widget-section">

            <img class="shape-1 animation-down" src="Images/shape-21.webp" alt="Shape">

            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">

                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <div class="widget-logo">
                                <a href="#"><img src="Images/logo1.png" alt="Logo"></a>
                            </div>

                            <div class="widget-address">
                                <h4 class="footer-widget-title">Caribbean Ct</h4>
                                <p>Haymarket, Virginia (VA).</p>
                            </div>

                            <ul class="widget-info">
                                <li>
                                    <p> <i class="fa fa-envelope"></i> <a
                                            href="mailto:address@gmail.com">address@gmail.com</a> </p>
                                </li>
                                <li>
                                    <p> <i class="fa fa-phone-alt"></i> <a href="tel:9702621413">(970) 262-1413</a> </p>
                                </li>
                            </ul>

                            <ul class="widget-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer Widget End -->

                    </div>
                    <div class="col-lg-6 order-md-3 order-lg-2">

                        <!-- Footer Widget Link Start -->
                        <div class="footer-widget-link">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Category</h4>

                                <ul class="widget-link">
                                    <li><a href="#">Creative Writing</a></li>
                                    <li><a href="#">Film &amp; Video</a></li>
                                    <li><a href="#">Graphic Design</a></li>
                                    <li><a href="#">UI/UX Design</a></li>
                                    <li><a href="#">Business Analytics</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>

                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Quick Links</h4>

                                <ul class="widget-link">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Discussion</a></li>
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Customer Support</a></li>
                                    <li><a href="#">Course FAQ's</a></li>
                                </ul>

                            </div>
                            <!-- Footer Widget End -->

                        </div>
                        <!-- Footer Widget Link End -->

                    </div>
                    <div class="col-lg-3 col-md-6 order-md-2 order-lg-3">

                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Subscribe</h4>

                            <div class="widget-subscribe">
                                <p>Lorem Ipsum has been them an industry printer took a galley make book.</p>

                                <div class="widget-form">
                                    <form action="https://codebugg.000webhostapp.com">
                                        <input type="text" placeholder="Email here">
                                        <button class="btn btn-primary btn-hover-dark">Subscribe Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Footer Widget End -->

                    </div>
                </div>
            </div>

            <img class="shape-2 animation-left" src="Images/shape-22.webp" alt="Shape">

        </div>
        <!-- Footer Widget Section End -->

        <!-- Footer Copyright Start -->
        <div class="footer-copyright">
            <div class="container">

                <!-- Footer Copyright Start -->
                <div class="copyright-wrapper">
                    <div class="copyright-link">
                        <a href="#">Terms of Service</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Sitemap</a>
                        <a href="#">Security</a>
                    </div>
                    <div class="copyright-text">
                        <p>© 2021 <span> Kiran </span> Made with <i class="fa fa-heart"></i> by <a
                                href="#">Codebug</a></p>
                    </div>
                </div>
                <!-- Footer Copyright End -->

            </div>
        </div>
        <!-- Footer Copyright End -->

    </div>



    <!-- Footer End -->


</body>

</html>


<script>
    // sticky navigation

    window.addEventListener("scroll", function () {
        var header = document.querySelector(".header-main");
        header.classList.toggle("sticky", window.scrollY > 0);
    })
</script>