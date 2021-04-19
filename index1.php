<?php
session_start();
require 'db_connection.php';
require 'login.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: home.php');
exit;
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />

    <!--====== Title ======-->
    <title>Document Generator</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="photos/undraw_organize_resume_utk5.svg"
      type="image/png"
    />

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css" />

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css" />

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css" />

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css" />

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css" />
  
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
</head>

<body >
    
    <!--====== HEADER PART START ======-->

    <header class="header-area">
      <div class="navbar-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a>
                    
                  <img
                    src="photos/undraw_organize_resume_utk5.svg"
                    alt="Logo"
                    height="50px"
                  />
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <!-- <div
                  class="collapse navbar-collapse sub-menu-bar"
                  id="navbarSupportedContent"
                >
                  <ul id="nav" class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#facts">Why</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#team">Team</a>
                    </li>
                    
                  </ul>
                </div> -->
                <!-- navbar collapse -->

                <!-- <div class="navbar-btn d-none d-sm-inline-block">
                  <a class="main-btn" data-scroll-nav="0" href="index.php"
                    >Logout</a
                  >
                </div> -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->

      <div
        id="home"
        class="header-hero bg_cover"
        
      >
        <div class="container"> 
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="header-hero-content text-center" >
              <form action="" method="post" style="background-color: #f7f7f7; border-radius:20px; margin-top:-10%;">
                <h2>User Login</h2>

        <div class="container">
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter email" id="email" name="user_email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter password" id="password" name="user_password" required>

            <button href="#" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s" type="submit">Login</button>
            <p class="link">
                <a href="forgotpwd.php" style="text-decoration: none;
    cursor: pointer;">forgot password?</a>
            </p>
        </div>
        <?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>'; 
}
?>
<div class="container"  style="background-color:#f1f1f1" >
                  <a class="main-btn" data-scroll-nav="0" href="signup.php"
                    >Create an account</a
                  >
                </div>
        <!-- <div class="container" style="background-color:#f1f1f1">
            <a  href="signup.php"><button type="button" class="main-btn">Create an account</button></a>
        </div> -->
    </form>
                <!-- <a
                  href="#"
                  class="main-btn wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="1.1s"
                  
                  >Get Started</a
                > -->
              </div>
              <!-- header hero content -->
            </div>
            <div class="col-lg-6">
              <img src="photos/undraw_secure_files_re_6vdh.svg" alt="hero" style="margin-top: 30%;"  />
              <!-- <img src="photos/undraw_organize_resume_utk5.svg" alt="hero" /> -->
            </div>
          </div>
          
          <!-- row -->

        </div>
        <!-- container -->
        <div id="particles-1" class="particles"></div>
      </div>
      <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->


    
</body>

</html>
