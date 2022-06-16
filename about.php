<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
    <?php include 'css/about.php'; ?>
    <?php include 'css/bloggrid.php'; ?>
    <?php include 'css/contactus.php'; ?>
    <?php include 'css/courses.php'; ?>
    <?php include 'css/coursesdetails.php'; ?>
	<?php include 'JavaScript/javascript.php'; ?>
    <title>About</title>
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
                                <a href="#course">All Course</a>
                                <ul class="sub-menu">
                                    <li><a href="courses.php">Courses</a></li>
                                    <li><a href="courses-details.php">Courses Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="courses.php">Courses </a>
                                <ul class="sub-menu">
                                    <li><a href="about.php">Web Development</a></li>
                                    <li><a href="Registration.php">Android Development</a></li>
                                    <li><a href="login.php">Software Development</a></li>
                                    <li><a href="after-enroll.php">After Enroll</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#blog">Blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#blog">Blog</a>
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
        <img class="shape-1 " src="Images/shape-8.webp" alt="Shape">
        <img class="shape-2" src="Images/shape-23.webp" alt="Shape">
        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <ul class="breadcrumb fs-2">
                    <li><a href="#">Home</a> // </li>
                    <li class="active">About</li>
                </ul>
                <h2 class="title">About <span> Codebug</span></h2>
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
            <img class="shape-3" src="images/shape-24.webp" alt="Shape">
            <img class="shape-author" src="images\author-11.webp" alt="Shape">
        </div>
        </div>
    </section>

    <!-- Page Banner End -->

    <!-- About Start -->

    <div class="section">

        <div class="section-padding-02 mt-n10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <!-- About Images Start -->
                        <div class="about-images">
                            <div class="images">
                                <img src="Images/about.webp" alt="About">
                            </div>

                            <div class="about-years">
                                <div class="years-icon">
                                    <img src="Images/logo-icon.webp" alt="About">
                                </div>
                                <p><strong>28+</strong> Years Experience</p>
                            </div>
                        </div>
                        <!-- About Images End -->

                    </div>
                    <div class="col-lg-6">

                        <!-- About Content Start -->
                        <div class="about-content">
                            <h5 class="sub-title">Welcome to Codebug.</h5>
                            <h2 class="main-title">You can join with codebug and upgrade your skill for your
                                <br><span>bright future.</span>
                            </h2>
                            <p>We help organizations of all types and sizes prepare for the path ahead — wherever it leads.
                                 Our curated collection of technical courses help students and nonprofits go further by placing learning at the center of their strategies.</p>
                            <a href="#" class="btn btn-primary btn-hover-dark">Start A Course</a>
                        </div>
                        <!-- About Content End -->

                    </div>
                </div>
            </div>
        </div>

        <div class="section-padding-02 mt-n6">
            <div class="container">

                <!-- About Items Wrapper Start -->
                <div class="about-items-wrapper">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- About Item Start -->
                            <div class="about-item">
                                <div class="item-icon-title">
                                    <div class="item-icon">
                                        <i class="flaticon-tutor"></i>
                                    </div>
                                    <div class="item-title">
                                        <h3 class="title">Work with us</h3>
                                    </div>
                                </div>
                                <p>At Codebug, we’re all learners and instructors. We live out our values every day to create a culture that is diverse, inclusive, and committed to helping employees thrive.</p>
                                
                            </div>
                            <!-- About Item End -->
                        </div>
                        <div class="col-lg-4">
                            <!-- About Item Start -->
                            <div class="about-item">
                                <div class="item-icon-title">
                                    <div class="item-icon">
                                        <i class="flaticon-coding"></i>
                                    </div>
                                    <div class="item-title">
                                        <h3 class="title">Portable Program</h3>
                                    </div>
                                </div>
                                <p>We’re committed to changing the future of learning for the better. Dig into our original research to learn about the forces that are shaping the modern workplace.</p>

                                
                            </div>
                            <!-- About Item End -->
                        </div>
                        <div class="col-lg-4">
                            <!-- About Item Start -->
                            <div class="about-item">
                                <div class="item-icon-title">
                                    <div class="item-icon">
                                        <i class="flaticon-increase"></i>
                                    </div>
                                    <div class="item-title">
                                        <h3 class="title">Read our blog</h3>
                                    </div>
                                </div>
                                <p>Want to know what we’ve been up to lately? Check out the Udemy blog to get the scoop on the latest news, ideas and projects, and more.</p>
                                
                            </div>
                            <!-- About Item End -->
                        </div>
                    </div>
                </div>
                <!-- About Items Wrapper End -->

            </div>
        </div>

    </div>

    <!-- About End -->


    <!-- Call to Action Start -->

    <div class="section section-padding-02">
        <div class="container">

            <!-- Call to Action Wrapper Start -->
            <div class="call-to-action-wrapper">

                <img class="cat-shape-01 animation-round" src="Images/shape-12.webp" alt="Shape">
                <img class="cat-shape-02" src="Images/shape-13.svg" alt="Shape">
                <img class="cat-shape-03 animation-round" src="Images/shape-12.webp" alt="Shape">

                <div class="row align-items-center">
                    <div class="col-md-6">

                        <!-- Section Title Start -->
                        <div class="section-title shape-02">
                            <h5 class="sub-title">Become A Instructor</h5>
                            <h2 class="main-title">You can join with Edule <br>as <span>a instructor?</span></h2>
                        </div>
                        <!-- Section Title End -->

                    </div>
                    <div class="col-md-6">
                        <div class="call-to-action-btn">
                            <a class="btn btn-primary btn-hover-dark" href="contact.html">Drop Information</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to Action Wrapper End -->

        </div>
    </div>

    <!-- Call to Action End -->


    <!-- Team Member's Start -->

    <div class="section section-padding mt-n1">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title shape-03 text-center">
                <h5 class="sub-title">Team Member's</h5>
                <h2 class="main-title"> <span>Codebug Skilled Instructor</span></h2>
            </div>
            <!-- Section Title End -->

            <!-- Team Wrapper Start -->
            <div class="team-wrapper">
                <div class="row row-cols-lg-5 row-cols-sm-3 row-cols-2 ">
                    <div class="col">

                        <!-- Single Team Start -->
                        <div class="single-team">
                            <div class="team-thumb">
                                <img src="assets/images/author/apnacollege.jpg" alt="Author">
                            </div>
                            <div class="team-content">
                                <div class="rating">
                                    <span class="count">4.9</span>
                                    <i class="fa fa-star"></i>
                                    <span class="text">(rating)</span>
                                </div>
                                <h4 class="name">Apna College</h4>
                                <span class="designation"> Instructor</span>
                            </div>
                        </div>
                        <!-- Single Team End -->

                    </div>
                    <div class="col">

                        <!-- Single Team Start -->
                        <div class="single-team">
                            <div class="team-thumb">
                                <img src="assets/images/author/htmlcss.png" alt="Author">
                            </div>
                            <div class="team-content">
                                <div class="rating">
                                    <span class="count">4</span>
                                    <i class="fa fa-star"></i>
                                    <span class="text">(rating)</span>
                                </div>
                                <h4 class="name">Net Ninja</h4>
                                <span class="designation">Instructor</span>
                            </div>
                        </div>
                        <!-- Single Team End -->

                    </div>
                    <div class="col">

                        <!-- Single Team Start -->
                        <div class="single-team">
                            <div class="team-thumb">
                                <img src="assets/images/author/nodejs.png" alt="Author">
                            </div>
                            <div class="team-content">
                                <div class="rating">
                                    <span class="count">3.9</span>
                                    <i class="fa fa-star"></i>
                                    <span class="text">(rating)</span>
                                </div>
                                <h4 class="name">Tolusko</h4>
                                <span class="designation">Instructor</span>
                            </div>
                        </div>
                        <!-- Single Team End -->

                    </div>
                    <div class="col">

                        <!-- Single Team Start -->
                        <div class="single-team">
                            <div class="team-thumb">
                                <img src="assets/images/author/react.jpeg" alt="Author">
                            </div>
                            <div class="team-content">
                                <div class="rating">
                                    <span class="count">4.9</span>
                                    <i class="fa fa-star"></i>
                                    <span class="text">(rating)</span>
                                </div>
                                <h4 class="name">Tech with Tim</h4>
                                <span class="designation">Instructor</span>
                            </div>
                        </div>
                        <!-- Single Team End -->

                    </div>
                    <div class="col">

                        <!-- Single Team Start -->
                        <div class="single-team">
                            <div class="team-thumb">
                                <img src="assets/images/author/angular.jpg" alt="Author">
                            </div>
                            <div class="team-content">
                                <div class="rating">
                                    <span class="count">4.5</span>
                                    <i class="fa fa-star"></i>
                                    <span class="text">(rating)</span>
                                </div>
                                <h4 class="name">Simplilearn</h4>
                                <span class="designation">Instructor</span>
                            </div>
                        </div>
                        <!-- Single Team End -->

                    </div>
                    <div class="col">

                        <!-- Single Team Start -->
                        <div class="single-team">
                            <div class="team-thumb">
                                <img src="assets/images/author/react.jpeg" alt="Author">
                            </div>
                            <div class="team-content">
                                <div class="rating">
                                    <span class="count">4.9</span>
                                    <!-- <i class="fa fa-star"></i> -->
                                    <span class="text">(rating)</span>
                                </div>
                                <h4 class="name">Rochelle Thomas</h4>
                                <span class="designation">MSC, Instructor</span>
                            </div>
                        </div>
                        <!-- Single Team End -->

                    </div>
                    <div class="col">

                        <!-- Single Team Start -->
                        <div class="single-team">
                            <div class="team-thumb">
                                <img src="assets/images/author/javascriptlogo.jpg" alt="Author">
                            </div>
                            <div class="team-content">
                                <div class="rating">
                                    <span class="count">4.9</span>
                                    <!-- <i class="fa fa-star"> -->
                                    <span class="text">(rating)</span>
                                </div>
                                <h4 class="name">Della Salazar</h4>
                                <span class="designation">BBA, Instructor</span>
                            </div>
                        </div>
                        <!-- Single Team End -->

                    </div>
                    <div class="col">

                        <!-- Single Team Start -->
                        <div class="single-team">
                            <div class="team-thumb">
                                <img src="assets/images/author/pythonouth.jpeg" alt="Author">
                            </div>
                            <div class="team-content">
                                <div class="rating">
                                    <span class="count">4.9</span>
                                    <!-- <i class="fa fa-star"> -->
                                    <span class="text">(rating)</span>
                                </div>
                                <h4 class="name">Ricardo Patrick</h4>
                                <span class="designation">MBA, Instructor</span>
                            </div>
                        </div>
                        <!-- Single Team End -->

                    </div>
                    <div class="col">

                        <!-- Single Team Start -->
                        <div class="single-team">
                            <div class="team-thumb">
                                <img src="Images/author-09.jpg" alt="Author">
                            </div>
                            <div class="team-content">
                                <div class="rating">
                                    <span class="count">4.9</span>
                                    <!-- <i class="fa fa-star"></i> -->
                                    <span class="text">(rating)</span>
                                </div>
                                <h4 class="name">Kurt Stewart</h4>
                                <span class="designation">BBS, Instructor</span>
                            </div>
                        </div>
                        <!-- Single Team End -->

                    </div>
                    <div class="col">

                        <!-- Single Team Start -->
                        <div class="single-team">
                            <div class="team-thumb">
                                <img src="Images/author-10.jpg" alt="Author">
                            </div>
                            <div class="team-content">
                                <div class="rating">
                                    <span class="count">4.9</span>
                                    <!-- <i class="fa fa-star"></i> -->
                                    <span class="text">(rating)</span>
                                </div>
                                <h4 class="name">Rodney Terry</h4>
                                <span class="designation">MBBS, Instructor</span>
                            </div>
                        </div>
                        <!-- Single Team End -->

                    </div>
                </div>
            </div>
            <!-- Team Wrapper End -->

        </div>
    </div>

    <!-- Team Member's End -->


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
                    <h2 class="main-title">Download our mobile app. for easy to start your course.</h2>
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


    <!-- Testimonial Start -->

    <div class="section section-padding-02 mt-n1">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title shape-03 text-center">
                <h5 class="sub-title">Student Testimonial</h5>
                <h2 class="main-title">Feedback From <span> Student</span></h2>
            </div>
            <!-- Section Title End -->

            <!-- Testimonial Wrapper End -->
            <div class="testimonial-wrapper testimonial-active">
                <div
                    class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-730c412a87008b6b" aria-live="polite"
                        style="transform: translate3d(0px, 0px, 0px);">
                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial swiper-slide swiper-slide-active" role="group" aria-label="1 / 3"
                            style="width: 570px; margin-right: 30px;">
                            <div class="testimonial-author">
                                <div class="author-thumb">
                                    <img src="Images/author-06.jpg" alt="Author">

                                    <i class="fa fa-quote-left"></i>
                                </div>

                                <span class="rating-star">
                                    <span class="rating-bar" style="width: 80%;"></span>
                                </span>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make type specimen book
                                    has survived not five centuries but also the leap into electronic.</p>
                                <h4 class="name">Sara Alexander</h4>
                                <span class="designation">Product Designer, USA</span>
                            </div>
                        </div>
                        <!-- Single Testimonial End -->

                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial swiper-slide swiper-slide-next" role="group" aria-label="2 / 3"
                            style="width: 570px; margin-right: 30px;">
                            <div class="testimonial-author">
                                <div class="author-thumb">
                                    <img src="Images/author-07.jpg" alt="Author">

                                    <i class="fa fa-quote-left"></i>
                                </div>

                                <span class="rating-star">
                                    <span class="rating-bar" style="width: 80%;"></span>
                                </span>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make type specimen book
                                    has survived not five centuries but also the leap into electronic.</p>
                                <h4 class="name">Melissa Roberts</h4>
                                <span class="designation">Product Designer, USA</span>
                            </div>
                        </div>
                        <!-- Single Testimonial End -->

                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial swiper-slide" role="group" aria-label="3 / 3"
                            style="width: 570px; margin-right: 30px;">
                            <div class="testimonial-author">
                                <div class="author-thumb">
                                    <img src="Images/author-03.webp" alt="Author">

                                    <i class="fa fa-quote-left"></i>
                                </div>

                                <span class="rating-star">
                                    <span class="rating-bar" style="width: 80%;"></span>
                                </span>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make type specimen book
                                    has survived not five centuries but also the leap into electronic.</p>
                                <h4 class="name">Sara Alexander</h4>
                                <span class="designation">Product Designer, USA</span>
                            </div>
                        </div>
                        <!-- Single Testimonial End -->
                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                            class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                            aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 2"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
            <!-- Testimonial Wrapper End -->

        </div>
    </div>

    <!-- Testimonial End -->

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
                                    <p> <i class="fa fa-phone-alt"></i> <a href="tel:9702621413">(970) 262-1413</a> </p>
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
                        <p>© 2021 <span> Edule </span> Made with <i class="fa fa-heart"></i> by <a
                                href="#">Codecarnival</a></p>
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
        var header = document.querySelector(".header-menu");
        header.classList.toggle("sticky", window.scrollY > 0);
    })
</script>