<!DOCTYPE html>
<html lang="en">

<head>
<title>Codebug</title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
	<?php include 'JavaScript/javascript.php'; ?>
</head>

<body>

 <!-- header section start -->
 <div class="main-wrapper">
    <header>
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
                                <a href="courses.php">Courses</a>
                                <ul class="sub-menu">
                                    <li><a href="blogdetails.php">Courses</a></li>
                                    <li><a href="blogdetails.php">Courses Details</a></li>
                                </ul>
                            </li>
                            <!-- <li class="menu-item-has-children">
                                <a href="Languages/programming.php"> Programming </a>
                                <ul class="sub-menu">
                                    <li><a href="about.php">Web Development</a></li>
                                    <li><a href="Registration.php">Android Development</a></li>
                                    <li><a href="login.php">Software Development</a></li>
                                    <li><a href="after-Enroll.php">After Enroll</a></li>
                                </ul>
                            </li> -->
                            <li class="menu-item-has-children">
                                <a href="bloggrid.php">Blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="bloggrid.php">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid.php">Blog</a></li>
                                            <li><a href="blogdetails.php">Blog Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog Details</a>
                                        <ul class="sub-menu">
                                            <li><a href="blogdetails.php">Blog Details Right
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
                        <input type="checkbox" id="click">
                        <a class="menu-toggle" for="click" href="javascript:void(0)">
                        <i class="fa fa-bars"></i>
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
                        <li><a href="blogdetails.php">Courses Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><span class="mobile-menu-expand"></span>
                    <a href="#">Pages </a>
                    <ul class="sub-menu" style="display: none;">
                        <li><a href="about.php">About</a></li>
                        <li><a href="Registration.php">Registration</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="after-Enroll.php">After Enroll Now</a></li>
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



    
    <!-- Slider Start -->
    <div class="section slider-section">

        <!-- Slider Shape Start -->
        <div class="slider-shape">
            <img class="shape-1 animation-round" src="Images/shape-8.webp" alt="Shape">
        </div>
        <!-- Slider Shape End -->

        <div class="container">

            <!-- Slider Content Start -->
            <div class="slider-content">
                <h4 class="sub-title">Start your favourite course</h4>
                <h2 class="main-title">Now learning from anywhere, and build your <span>bright career.</span></h2>
                <p>It has survived not only five centuries but also the leap into electronic typesetting.</p>
                <a class="btn btn-primary btn-hover-dark" href="#">Start A Course</a>
            </div>
            <!-- Slider Content End -->

        </div>

        <!-- Slider Courses Box Start -->
        <div class="slider-courses-box">

            <img class="shape-1 animation-left" src="Images/shape-5.webp" alt="Shape">

            <div class="box-content">
                <div class="box-wrapper">
                    <i class="fa fa-book"></i>
                    <span class="count">1,235</span>
                    <p>courses</p>
                </div>
            </div>

            <img class="shape-2" src="Images/shape-6.webp" alt="Shape">

        </div>
        <!-- Slider Courses Box End -->

        <!-- Slider Rating Box Start -->
        <div class="slider-rating-box">

            <div class="box-rating">
                <div class="box-wrapper">
                    <span class="count">4.8 <i class="fa fa-star"></i></span>
                    <p>Rating (86K)</p>
                </div>
            </div>

            <img class="shape animation-up" src="Images/shape-7.webp" alt="Shape">

        </div>
        <!-- Slider Rating Box End -->

        <!-- Slider Images Start -->
        <div class="slider-images">
            <div class="images">
                <img src="Images/slider-1.webp" alt="Slider">
            </div>
        </div>
        <!-- Slider Images End -->


    </div>
    <!-- Slider End -->

    <!-- All Courses Start -->
    <div class="section section-padding-02">
        <div class="container">

            <!-- All Courses Top Start -->
            <div class="courses-top">

                <!-- Section Title Start -->
                <div class="section-title shape-01">
                    <h2 class="main-title">All <span>Courses</span> of Edule</h2>
                </div>
                <!-- Section Title End -->

                <!-- Courses Search Start -->
                <div class="courses-search">
                    <form action="https://codebugg.000webhostapp.com">
                        <input type="text" placeholder="Search your course">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Courses Search End -->

            </div>
            <!-- All Courses Top End -->


            <!-- All Courses tab content Start -->

            <div class="tab-content courses-tab-content">
                <div class="tab-pane fade show active" id="tabs1">

                    <!-- All Courses Wrapper Start -->
                    <div class="courses-wrapper">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Courses Start -->
                                <div class="single-courses">
                                    <div class="courses-images">
                                        <a href="blogdetails.php"><img
                                                src="assets/images/courses/php.jpg" alt="Courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <div class="courses-author">
                                            <div class="author">
                                                <div class="author-thumb">
                                                    <a href="#"><img src="assets/images/author/traversyauthor.jpg"
                                                            alt="Author"></a>
                                                </div>
                                                <div class="author-name">
                                                    <a class="name" href="#">Traversy Media</a>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <a href="#">Science</a>
                                            </div>
                                        </div>

                                        <h4 class="title"><a href="blogdetails.php">PHP Front To Back  - Series full course of PHP
                                            Learn with traversy media</a></h4>
                                        <div class="courses-meta">
                                            <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                            <span> <i class="icofont-read-book"></i> 22 Lectures</span>
                                        </div>
                                        <div class="courses-price-review">
                                            <div class="courses-review">
                                                <span class="rating-count"> <a href="blogdetails.php" style="text-decoration:none; color:#fff;">Enroll Now</a> </span>
                                                <span class="rating-star">
                                                    <span class="rating-bar" style="width: 80%;"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Courses End -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Courses Start -->
                                <div class="single-courses">
                                    <div class="courses-images">
                                        <a href="java.php"><img
                                                src="assets/images/courses/java.jpg" alt="Courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <div class="courses-author">
                                            <div class="author">
                                                <div class="author-thumb">
                                                    <a href="coursedetail/java.php"><img src="assets/images/author/apnacollege.jpg"
                                                            alt="Author"></a>
                                                </div>
                                                <div class="author-name">
                                                    <a class="name" href="#">Apna College</a>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <a href="#">Science</a>
                                            </div>
                                        </div>

                                        <h4 class="title"><a href="coursedetail/java.php">Introduction to Java Language | Lecture 1 | Complete Placement Course</a></h4>
                                        <div class="courses-meta">
                                            <span> <i class="icofont-clock-time"></i> 20 hr 45 mins</span>
                                            <span> <i class="icofont-read-book"></i> 34 Lectures </span>
                                        </div>
                                        <div class="courses-price-review" href="coursedetail/java.php">
                                            <div class="courses-review">
                                                <span class="rating-count"><a href="coursedetail/java.php" style="text-decoration:none; color:#fff;">Enroll Now</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Courses End -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Courses Start -->
                                <div class="single-courses">
                                    <div class="courses-images">
                                        <a href="htmlcss.php"><img
                                                src="assets/images/courses/htmlcss.jpg" alt="Courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <div class="courses-author">
                                            <div class="author">
                                                <div class="author-thumb">
                                                    <a href="#"><img src="assets/images/author/htmlcss.png"
                                                            alt="Author"></a>
                                                </div>
                                                <div class="author-name">
                                                    <a class="name" href="#">The net ninja</a>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <a href="#">HTML</a>
                                            </div>
                                        </div>

                                        <h4 class="title"><a href="htmlcss.php">HTML & CSS Crash Course Tutorial To Learn Web Devlopment
                                            </a></h4>
                                        <div class="courses-meta">
                                            <span> <i class="icofont-clock-time"></i> 10 hr 15 mins</span>
                                            <span> <i class="icofont-read-book"></i> 11 Lectures </span>
                                        </div>
                                        <div class="courses-price-review" href="htmlcss.php">
                                            <div class="courses-review">
                                                <span class="rating-count"><a href="htmlcss.php" style="text-decoration:none; color:#fff;">Enroll Now</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Courses End -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Courses Start -->
                                <div class="single-courses">
                                    <div class="courses-images">
                                        <a href="nodejs.php"><img
                                                src="assets/images/courses/nodejs.jpg" alt="Courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <div class="courses-author">
                                            <div class="author">
                                                <div class="author-thumb">
                                                    <a href="#"><img src="assets/images/author/nodejs.png"
                                                            alt="Author"></a>
                                                </div>
                                                <div class="author-name">
                                                    <a class="name" href="#">Telusko</a>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <a href="#">Nodejs</a>
                                            </div>
                                        </div>

                                        <h4 class="title"><a href="nodejs.php">Node js Series: Learn  What is Node js? | Simplified Explanation
                                              </a></h4>
                                        <div class="courses-meta">
                                            <span> <i class="icofont-clock-time"></i> 07 hr 15 mins</span>
                                            <span> <i class="icofont-read-book"></i> 9 Lectures </span>
                                        </div>
                                        <div class="courses-price-review" href="nodejs.php">
                                            <div class="courses-review">
                                                <span class="rating-count"><a href="nodejs.php" style="text-decoration:none; color:#fff;">Enroll Now</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Courses End -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Courses Start -->
                                <div class="single-courses">
                                    <div class="courses-images">
                                        <a href="react.php"><img
                                                src="assets/images/courses/react.jpg" alt="Courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <div class="courses-author">
                                            <div class="author">
                                                <div class="author-thumb">
                                                    <a href="#"><img src="assets/images/author/react.jpeg"
                                                            alt="Author"></a>
                                                </div>
                                                <div class="author-name">
                                                    <a class="name" href="#">Tech with tim</a>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <a href="#">React</a>
                                            </div>
                                        </div>

                                        <h4 class="title"><a href="react.php">React Full Course:React For Beginners To Learn just click Enroll.
                                    </a></h4>
                                        <div class="courses-meta">
                                            <span> <i class="icofont-clock-time"></i> 15 hr 15 mins</span>
                                            <span> <i class="icofont-read-book"></i> 12 Lectures </span>
                                        </div>
                                        <div class="courses-price-review" href="react.php">
                                            <div class="courses-review">
                                                <span class="rating-count"><a href="react.php" style="text-decoration:none; color:#fff;">Enroll Now</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Courses End -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Courses Start -->
                                <div class="single-courses">
                                    <div class="courses-images">
                                        <a href="angular.php"><img
                                                src="assets/images/courses/angular.jpg" alt="Courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <div class="courses-author">
                                            <div class="author">
                                                <div class="author-thumb">
                                                    <a href="#"><img src="assets/images/author/angular.jpg"
                                                            alt="Author"></a>
                                                </div>
                                                <div class="author-name">
                                                    <a class="name" href="#">Simplilearn</a>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <a href="#">Angular</a>
                                            </div>
                                        </div>

                                        <h4 class="title"><a href="angular.php">Angular Tutorial For Beginners| What Is Angular And How It Works? | Simplilearn</a></h4>
                                        <div class="courses-meta">
                                            <span> <i class="icofont-clock-time"></i> 20 hr 15 mins</span>
                                            <span> <i class="icofont-read-book"></i> 21 Lectures </span>
                                        </div>
                                        <div class="courses-price-review" href="angular.php">
                                            <div class="courses-review">
                                                <span class="rating-count"><a href="amgular.php" style="text-decoration:none; color:#fff;">Enroll Now</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Courses End -->
                            </div>
                        </div>
                    </div>
                    <!-- All Courses Wrapper End -->

                </div>
                
                
            </div>

            <!-- All Courses tab content End -->

            <div class="courses-btn text-center">
                <a href="courses.php" class="btn btn-secondary btn-hover-primary">Other Course</a>
            </div>

            <!-- Call to Action Start -->
            <div class="call-to-action-wrapper">

                <img class="cat-shape-01 animation-round" src="Images/shape-12.webp" alt="Shape">
                <img class="cat-shape-02" src="Images/shape-13.svg" alt="Shape">
                <img class="cat-shape-03 animation-round" src="Images/shape-12.webp" alt="Shape">

                <div class="row align-items-center">
                    <div class="col-md-6">

                        <!-- Section Title Start -->
                        <div class="section-title shape-02">
                            <h5 class="sub-title">Become A Instructor</h5>
                            <h2 class="main-title">You can join with Edule <br> as <span>a instructor?</span></h2>
                        </div>
                        <!-- Section Title End -->

                    </div>
                    <div class="col-md-6">
                        <div class="call-to-action-btn">
                            <a class="btn btn-primary btn-hover-dark" href="contact.php">Drop Information</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to Action End -->

            <!-- How It Work End -->
            <div class="section section-padding mt-n1 ">
                <div class="container">

                    <!-- Section Title Start -->
                    <div class="section-title shape-03 text-center">
                        <h5 class="sub-title">Over 1,235+ Course</h5>
                        <h2 class="main-title">How It <span> Work?</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- How it Work Wrapper Start -->
                    <div class="how-it-work-wrapper">

                        <!-- Single Work Start -->
                        <div class="single-work">
                            <img class="shape-1" src="Images/shape-15.webp" alt="Shape">

                            <div class="work-icon">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="work-content">
                                <h3 class="title">Find Your Course</h3>
                                <p>It has survived not only centurie also leap into electronic.</p>
                            </div>
                        </div>
                        <!-- Single Work End -->

                        <!-- Single Work Start -->
                        <div class="work-arrow">
                            <img class="arrow" src="Images/shape-17.webp" alt="Shape">
                        </div>
                        <!-- Single Work End -->

                        <!-- Single Work Start -->
                        <div class="single-work">
                            <img class="shape-2" src="Images/shape-15.webp" alt="Shape">

                            <div class="work-icon">
                                <i class="fa fa-book"></i>
                            </div>
                            <div class="work-content">
                                <h3 class="title">Book A Seat</h3>
                                <p>It has survived not only centurie also leap into electronic.</p>
                            </div>
                        </div>
                        <!-- Single Work End -->

                        <!-- Single Work Start -->
                        <div class="work-arrow">
                            <img class="arrow" src="Images/shape-17.webp" alt="Shape">
                        </div>
                        <!-- Single Work End -->

                        <!-- Single Work Start -->
                        <div class="single-work">
                            <img class="shape-3" src="Images/shape-16.webp" alt="Shape">

                            <div class="work-icon">
                                <i class="fa fa-certificate"></i>
                            </div>
                            <div class="work-content">
                                <h3 class="title">Get Certificate</h3>
                                <p>It has survived not only centurie also leap into electronic.</p>
                            </div>
                        </div>
                        <!-- Single Work End -->

                    </div>

                </div>
            </div>
            <!-- How It Work End -->


            <!-- Blog Start -->
            <div class="section section-padding mt-n1" id="blog">
                <div class="container">

                    <!-- Section Title Start -->
                    <div class="section-title shape-03 text-center">
                        <h5 class="sub-title">Latest News</h5>
                        <h2 class="main-title">Educational Tips &amp; <span> Tricks</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Blog Wrapper Start -->
                    <div class="blog-wrapper">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">

                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="blogdetails.php"><img src="Images/tips1.png"
                                                alt="Blog"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-author">
                                            <div class="author">
                                                <div class="author-thumb">
                                                    <a href="#"><img src="Images/tips.png" alt="Author"></a>
                                                </div>
                                                <div class="author-name">
                                                    <a class="name" href="#">Geeks for Geeks</a>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <a href="#">Tips</a>
                                            </div>
                                        </div>

                                        <h4 class="title"><a href="blogdetails.php"> 7 Tips and Tricks to Learn Programming language.
                                                </a></h4>

                                        <div class="blog-meta">
                                            <span> <i class="fa fa-calendar"></i> 21 March, 2021</span>
                                            <span> <i class="fa fa-heart"></i> 2,568+ </span>
                                        </div>

                                        <a href="blogdetails.php"
                                            class="btn btn-secondary btn-hover-primary">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->

                            </div>
                            <div class="col-lg-4 col-md-6">

                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="blogdetails.php"><img src="Images/domain.png"
                                                alt="Blog"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-author">
                                            <div class="author">
                                                <div class="author-thumb">
                                                    <a href="#"><img src="Images/domain1.png" alt="Author"></a>
                                                </div>
                                                <div class="author-name">
                                                    <a class="name" href="#">Borge Tech</a>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <a href="#">Domain</a>
                                            </div>
                                        </div>

                                        <h4 class="title"><a href="blogdetails.php">how to buy domain name | how to buy domain from godaddy</a></h4>

                                        <div class="blog-meta">
                                            <span> <i class="fa fa-calendar"></i> 16 june, 2021</span>
                                            <span> <i class="fa fa-heart"></i> 3,568+ </span>
                                        </div>

                                        <a href="blogdetails.php"
                                            class="btn btn-secondary btn-hover-primary">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->

                            </div>
                            <div class="col-lg-4 col-md-6">

                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="blogdetails.php"><img src="Images/blog-03.webp"
                                                alt="Blog"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-author">
                                            <div class="author">
                                                <div class="author-thumb">
                                                    <a href="#"><img src="Images/author-03.webp" alt="Author"></a>
                                                </div>
                                                <div class="author-name">
                                                    <a class="name" href="#">TEXAS</a>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <a href="#">Guide</a>
                                            </div>
                                        </div>

                                        <h4 class="title"><a href="Video/blogdetails.php">
                                        How to Become a Programmer: A Step-By-Step Guide for 2022</a></h4>

                                        <div class="blog-meta">
                                            <span> <i class="fa fa-calendar"></i> 1 january, 2022</span>
                                            <span> <i class="fa fa-heart"></i> 4,218+ </span>
                                        </div>

                                        <a href="blogrightside.php.php.php"
                                            class="btn btn-secondary btn-hover-primary">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->

                            </div>
                        </div>
                    </div>
                    <!-- Blog Wrapper End -->

                </div>
            </div>
            <!-- Blog End -->
        </div>



        <!-- scroll button -->

        <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out"
            data-abc="true"></a>

        <!-- scroll button end -->


        <!-- footer section start -->

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
                                    <h4 class="footer-widget-title">Code Bug</h4>
                                    <p>Nerul Navi Mumbai</p>
                                </div>

                                <ul class="widget-info">
                                    <li>
                                        <p><i class="fa fa-envelope"></i> <a
                                                href="mailto:address@gmail.com">address@gmail.com</a> </p>
                                    </li>
                                    <li>
                                        <p> <i class="fa fa-phone-alt"></i> <a href="tel:9702621413">(970)
                                                262-1413</a> </p>
                                    </li>
                                </ul>

                                <ul class="widget-social">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></li>
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
                                        <li><a href="courses.php">Creative Writing</a></li>
                                        <li><a href="courses.php">Film &amp; Video</a></li>
                                        <li><a href="courses.php">Graphic Design</a></li>
                                        <li><a href="courses.php">UI/UX Design</a></li>
                                        <li><a href="courses.php">Business Analytics</a></li>
                                        <li><a href="courses.php">Marketing</a></li>
                                    </ul>

                                </div>
                                <!-- Footer Widget End -->

                               <!-- Footer Widget Start -->
                               <div class="footer-widget">
                                    <h4 class="footer-widget-title">Quick Links</h4>

                                    <ul class="widget-link">
                                        <li><a href="termsandconditions.php">Privacy Policy</a></li>
                                        <li><a href="contactus.php">Discussion</a></li>
                                        <li><a href="termsandconditions.php">Terms &amp; Conditions</a></li>
                                        <li><a href="contactus.php">Customer Support</a></li>
                                        <li><a href="contactus.php">Course FAQ's</a></li>
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
                                        <form action="">
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

            <div class="footer-copyright">
                <div class="container">

                    <!-- Footer Copyright Start -->
                    <div class="copyright-wrapper">
                        <div class="copyright-link">
                            <a href="termsandconditions.php">Terms of Service</a>
                            <a href="termsandconditions.php">Privacy Policy</a>
                            <a href="about.php">About</a>
                            <a href="termsandconditions.php">Security</a>
                        </div>
                        <div class="copyright-text">
                            <p>© 2021 <span> Kiran / Poonam </span> Made with <i class="fa fa-heart"></i> by <a
                                    href="#">Codebug</a></p>
                        </div>
                    </div>
                    <!-- Footer Copyright End -->

                </div>
            </div>

            <!-- Footer  End -->

</body>

</html>


<script>
// sticky navigation

window.addEventListener("scroll", function () {
    var header = document.querySelector(".header-main");
    header.classList.toggle("sticky", window.scrollY > 0);
})



</script>