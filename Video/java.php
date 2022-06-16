<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'css/video.php'; ?>
    <title>Video Tutorial</title>

    <style>
        
    </style>

</head>

<body>

    <!-- Login Header Start -->

    <div class="section login-header">
        <!-- Login Header Wrapper Start -->
        <div class="login-header-wrapper navbar navbar-expand">

            <!-- Header Logo Start -->
            <div class="login-header-logo logo-2">
                <a href="index.php"><img src="Images/logo-icon.webp" alt="Logo"></a>
                <a href="index.php"><img src="Images/text-logo.webp" alt="Logo"></a>
            </div>
            <!-- Header Logo End -->

            <!-- Header Search Start -->
            <div class="login-header-search search-2 dropdown">
                <button class="search-toggle" data-bs-toggle="dropdown"></button>

                <div class="search-input dropdown-menu">
                    <form action="https://codebugg.000webhostapp.com/">
                        <input type="text" placeholder="Search here"> 
                        <i class="fa fa-search"></i>
                    </form>
                </div>

            </div>
            <!-- Header Search End -->

            <!-- Header Action Start -->
            <div class="login-header-action action-2 ml-auto">
                <div class="dropdown">
                    <button class="action notification" data-bs-toggle="dropdown">
                        <i class="fa fa-notification"></i>
                        <!-- <span class="active"></span> -->
                    </button>
                    <div class="dropdown-menu dropdown-notification">
                        <ul class="notification-items-list">
                            <i class="fa fa-bell"></i>
                                <span class="notify-icon bg-success text-white"><i class="icofont-ui-user"></i></span>
                                <div class="dropdown-body">
                                    <a href="#">
                                        <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                        </p>
                                    </a>
                                </div>
                                <span class="notify-time">3:20 am</span>
                            </li>
                            <li class="notification-item">
                                <span class="notify-icon bg-success text-white"><i
                                        class="icofont-shopping-cart"></i></span>
                                <div class="dropdown-body">
                                    <a href="#">
                                        <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                    </a>
                                </div>
                                <span class="notify-time">3:20 am</span>
                            </li>
                            <li class="notification-item">
                                <span class="notify-icon bg-danger text-white"><i class="icofont-book-mark"></i></span>
                                <div class="dropdown-body">
                                    <a href="#">
                                        <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                        </p>
                                    </a>
                                </div>
                                <span class="notify-time">3:20 am</span>
                            </li>
                            <li class="notification-item">
                                <span class="notify-icon bg-success text-white"><i class="icofont-heart-alt"></i></span>
                                <div class="dropdown-body">
                                    <a href="#">
                                        <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                    </a>
                                </div>
                                <span class="notify-time">3:20 am</span>
                            </li>
                            <li class="notification-item">
                                <span class="notify-icon bg-success text-white"><i class="icofont-image"></i></span>
                                <div class="dropdown-body">
                                    <a href="#">
                                        <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                        </p>
                                    </a>
                                </div>
                                <span class="notify-time">3:20 am</span>
                            </li>
                        </ul>
                        <a class="all-notification" href="#">See all notifications <i
                                class="fa fa-right"></i></a>
                    </div>
                </div>

                <a class="action author" href="#">
                    <img src="Images/author-07.jpg" alt="Author">
                </a>

                <div class="dropdown">
                    <button class="action more" data-bs-toggle="dropdown">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="" href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a class="" href="#"><i class="fa fa-inbox"></i> Inbox</a></li>
                        <li><a class="" href="#"><i class="fa fa-logout"></i> Sign Out</a></li>
                    </ul>
                </div>
            </div>
            <!-- Header Action End -->

        </div>
        <!-- Login Header Wrapper End -->
    </div>
    <!-- Login Header End -->




    <!-- Courses Enroll Start -->


    <div class="section">

        <!-- Courses Enroll Wrapper Start -->
        <div class="courses-enroll-wrapper">

            <!-- Courses Video Player Start -->
            <div class="courses-video-player">

                <!-- Courses Video Container Start -->
                <div class="vidcontainer">
                <iframe width="1070" height="690" src="https://www.youtube.com/embed/yRpLlJmRo2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- Courses Video Container End -->

            </div>
            <!-- Courses Video Player End -->

            <!-- Courses Video Playlist Start -->
            <div class="courses-video-playlist">
                <div class="playlist-title">
                    <h3 class="title">Course Content</h3>
                    <span>10 Lessons (20hr 45m)</span>
                </div>

                <!-- Video Playlist Start  -->
                <div class="video-playlist">
                    <div class="accordion" id="videoPlaylist">

                        <!-- Accordion Items Start  -->
                        <div class="accordion-item">
                            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                <p>Introduction to Java Language | Lecture 1 | Complete Placement Course</p>
                                <span class="total-duration">18 minutes</span>
                            </button>

                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#videoPlaylist">
                                <nav class="vids">
                                    <a class="link active playing" href="https://www.youtube.com/embed/LusTv0RlnSU">
                                    
                                        <p>Variables in Java | Input Output | Complete Placement Course | Lecture 2</p>
                                        <span class="total-duration">42 minutes</span>
                                    </a>

                                    <a class="link" href="https://www.youtube.com/embed/I5srDu75h_M">
                                        <p>Conditional Statements | If-else, Switch Break | Complete Java Placement Course | Lecture 3</p>
                                        <span class="total-duration">25 minutes</span>
                                    </a>

                                    <a class="link" href="https://www.youtube.com/embed/0r1SfRoLuzU">
                                        <p>Loops in Java | Java Placement Full Course | Lecture 4</p>
                                        <span class="total-duration">29 minutes</span>
                                    </a>

                                    <a class="link" href="https://www.youtube.com/embed/GjHNGM7KN3w">
                                        <p>9 Best Patterns Questions In Java (for Beginners) | Java Placement Course | Lecture 5</p>
                                        <span class="total-duration">58 minutes</span>
                                    </a>

                                    <a class="link" href="https://www.youtube.com/embed/Dr4PpNa7AYo">
                                        <p>Advanced Pattern Questions | Java | Complete Placement Course - Lecture 6</p>
                                        <span class="total-duration">39 minutes</span>
                                    </a>

                                    <a class="link" href="https://www.youtube.com/embed/qcSz4ef9UHA">
                                        <p>Functions & Methods | Java Complete Placement Course | Lecture 7</p>
                                        <span class="total-duration">26 minutes</span>
                                    </a>

                                    <a class="link" href="https://www.youtube.com/embed/pFPZ83mgH00">
                                        <p>Functions in Java | Practice Questions | Complete Placement Course | Lecture 8</p>
                                        <span class="total-duration">2 minutes</span>
                                    </a>

                                    <a class="link" href="https://www.youtube.com/embed/bQssdSrSGNE">
                                        <p>Basics of Time Complexity and Space Complexity | Java | Complete Placement Course | Lecture 9</p>
                                        <span class="total-duration">21 minutes</span>
                                    </a>
                                </nav>
                            </div>
                        </div>
                        <!-- Accordion Items End  -->

                      

                    </div>
                </div>
                <!-- Video Playlist End  -->

            </div>
            <!-- Courses Video Playlist End -->

        </div>
        <!-- Courses Enroll Wrapper End -->

    </div>

     <!-- Courses Enroll End -->


    <!-- scroll button -->

    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out"
        data-abc="true"></a>

    <!-- scroll button end -->


</body>

</html>

