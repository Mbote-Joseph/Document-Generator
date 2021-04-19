<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);
$get_reviews= mysqli_query($db_connection, "SELECT * FROM `reviews` ");
$review=mysqli_fetch_assoc($get_reviews);

}else{
header('Location: logout.php');
exit;
}
?>
<?php require_once 'getreviews.php'; ?>
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
  </head>

  <body>
    <!--[if IE]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
      <div class="loader">
        <div class="ytp-spinner">
          <div class="ytp-spinner-container">
            <div class="ytp-spinner-rotator">
              <div class="ytp-spinner-left">
                <div class="ytp-spinner-circle"></div>
              </div>
              <div class="ytp-spinner-right">
                <div class="ytp-spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

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

                <div
                  class="collapse navbar-collapse sub-menu-bar"
                  id="navbarSupportedContent"
                >
                  <ul id="nav" class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="page-scroll" href="resume.php">Resume</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="memo.php">Memo</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="applicationletter.php">Application Letter</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#facts">Why</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#blog"
                        >Hello,
                        <?php echo $userData['firstname'];?>!</a
                      >
                    </li>
                  </ul>
                </div>
                <!-- navbar collapse -->

                <div class="navbar-btn d-none d-sm-inline-block">
                  <a class="main-btn" data-scroll-nav="0" href="logout.php"
                    >Logout</a
                  >
                </div>
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
        style="background-image: url(assets/images/banner-bg.svg)"
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="header-hero-content text-left">
                <h3
                  class="header-sub-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.2s"
                >
                  Hello,
                  <?php echo $userData['firstname'];?>!
                </h3>
                <h2
                  class="header-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.5s"
                >
                  Document Generator
                </h2>
                <h3
                  class="header-sub-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.2s"
                >
                  Create your document <br />
                  in one button click
                </h3>
                <p
                  class="text wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                >
                  <!-- Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                  diam nonumy eirmod tempor -->
                </p>
                <br><br><br><br><br>
                <a
                  href="resume.php"
                  class="main-btn wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="1.1s"
                  style="margin-top:-20%; margin-left:30%;"
                  >Generate Resume</a
                >
                <br><br><br><br>
                <a
                  href="memo.php"
                  class="main-btn wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="1.1s"
                  style="margin-top:-20%; margin-left:30%;"
                  >Generate Memo</a
                >
                <br><br><br><br>
                <a
                  href="applicationletter.php"
                  class="main-btn wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="1.1s"
                  style="margin-top:-20%; margin-left:30%;"
                  > Application Letter</a
                >
              </div>
              <!-- header hero content -->
            </div>
            <div class="col-lg-6">
              <img src="photos/undraw_Personal_notebook_re_d7dc.svg" alt="hero" style="margin-top: 30%;"  />
              <!-- <img src="photos/undraw_dev_focus_b9xo.svg" alt="hero" /> -->
            </div>
          </div>
          
         
          
        </div>
        <!-- container -->
        <div id="particles-1" class="particles"></div>
      </div>
      <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== BRAMD PART START ======-->

    <div class="brand-area pt-90">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div
              class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between"
            >
              <div
                class="single-logo mt-30 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.2s"
              >
                <img src="assets/images/brand-1.png" alt="brand" />
              </div>
              <!-- single logo -->
              <div
                class="single-logo mt-30 wow fadeIn"
                data-wow-duration="1.5s"
                data-wow-delay="0.2s"
              >
                <img src="assets/images/brand-2.png" alt="brand" />
              </div>
              <!-- single logo -->
              <div
                class="single-logo mt-30 wow fadeIn"
                data-wow-duration="1.5s"
                data-wow-delay="0.3s"
              >
                <img src="assets/images/brand-3.png" alt="brand" />
              </div>
              <!-- single logo -->
              <div
                class="single-logo mt-30 wow fadeIn"
                data-wow-duration="1.5s"
                data-wow-delay="0.4s"
              >
                <img src="assets/images/brand-4.png" alt="brand" />
              </div>
              <!-- single logo -->
              <div
                class="single-logo mt-30 wow fadeIn"
                data-wow-duration="1.5s"
                data-wow-delay="0.5s"
              >
                <img src="assets/images/brand-5.png" alt="brand" />
              </div>
              <!-- single logo -->
            </div>
            <!-- brand logo -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>

    <!--====== BRAMD PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

<section id="features" class="services-area pt-120">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="section-title text-center pb-40">
          <div class="line m-auto"></div>
          <h3 class="title">
            Clean & simple design
            <span>document.io</span>
          </h3>
        </div>
        <!-- section title -->
      </div>
    </div>
    <!-- row -->
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-7 col-sm-8">
        <div
          class="single-services text-center mt-30 wow fadeIn"
          data-wow-duration="1s"
          data-wow-delay="0.2s"
        >
          <div class="services-icon">
            <img class="shape" src="photos/undraw_Personal_notebook_re_d7dc.svg" alt="shape" />
            <!-- <img
              class="shape-1"
              src="assets/images/services-shape-1.svg"
              alt="shape"
            /> -->
            <i class="lni-baloon"></i>
          </div>
          <div class="services-content mt-30">
            <h4 class="services-title"><a href="#">Clean</a></h4>
            <p class="text">
              You get Clean Computer Accessories with Warranty and we can never
              dissregard the Terms and Conditions.
            </p>
            <a class="more" href="#"
              >Learn More <i class="lni-chevron-right"></i
            ></a>
          </div>
        </div>
        <!-- single services -->
      </div>
      <div class="col-lg-4 col-md-7 col-sm-8">
        <div
          class="single-services text-center mt-30 wow fadeIn"
          data-wow-duration="1s"
          data-wow-delay="0.5s"
        >
          <div class="services-icon">
            <img class="shape" src="photos/undraw_happy_2021_h01d.svg" alt="shape" />
            <!-- <img
              class="shape-1"
              src="assets/images/services-shape-2.svg"
              alt="shape"
            /> -->
            <i class="lni-cog"></i>
          </div>
          <div class="services-content mt-30">
            <h4 class="services-title"><a href="#">Robust</a></h4>
            <p class="text">
              Our Machines are in Good Condition and Will always Serve You
              accordingly without failure. It is Our Joy to see you Happy
            </p>
            <a class="more" href="#"
              >Learn More <i class="lni-chevron-right"></i
            ></a>
          </div>
        </div>
        <!-- single services -->
      </div>
      <div class="col-lg-4 col-md-7 col-sm-8">
        <div
          class="single-services text-center mt-30 wow fadeIn"
          data-wow-duration="1s"
          data-wow-delay="0.8s"
        >
          <div class="services-icon">
            <img class="shape" src="photos/undraw_drone_surveillance_kjjg.svg" alt="shape" />
            <img
              class="shape-1"
              src="assets/images/services-shape-3.svg"
              alt="shape"
            />
            <i class="lni-bolt-alt"></i>
          </div>
          <div class="services-content mt-30">
            <h4 class="services-title"><a href="#">Powerful</a></h4>
            <p class="text">
              Powerful Machines with Good battery Life , High Processor Speed
              and working in desired Conditions.
            </p>
            <a class="more" href="#"
              >Learn More <i class="lni-chevron-right"></i
            ></a>
          </div>
        </div>
        <!-- single services -->
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</section>

<!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div
              class="about-content mt-50 wow fadeInLeftBig"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <div class="section-title">
                <div class="line"></div>
                <h3 class="title">
                  Quick & Easy <span>to Use Bootstrap Template</span>
                </h3>
              </div>
              <!-- section title -->
              <p class="text">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                erat, sed diam voluptua. At vero eos et accusam et justo duo
                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                amet, consetetur sadipscing.
              </p>
              <a href="#" class="main-btn">Try it Free</a>
            </div>
            <!-- about content -->
          </div>
          <div class="col-lg-6">
            <div
              class="about-image text-center mt-50 wow fadeInRightBig"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <img src="photos/undraw_online_resume_re_ru7s.svg" alt="about" />
            </div>
            <!-- about image -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
      <div class="about-shape-1">
        <img src="assets/images/about-shape-1.svg" alt="shape" />
      </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section class="about-area pt-70">
      <div class="about-shape-2">
        <img src="assets/images/about-shape-2.svg" alt="shape" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-lg-last">
            <div
              class="about-content mt-50 wow fadeInLeftBig"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <div class="section-title">
                <div class="line"></div>
                <h3 class="title">
                  Modern design <span> with Essential Features</span>
                </h3>
              </div>
              <!-- section title -->
              <p class="text">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                erat, sed diam voluptua. At vero eos et accusam et justo duo
                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                amet, consetetur sadipscing.
              </p>
              <a href="#" class="main-btn">Try it Free</a>
            </div>
            <!-- about content -->
          </div>
          <div class="col-lg-6 order-lg-first">
            <div
              class="about-image text-center mt-50 wow fadeInRightBig"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <img src="assets/images/about2.svg" alt="about" />
            </div>
            <!-- about image -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>

    <!--====== ABOUT PART START ======-->

    <section class="about-area pt-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div
              class="about-content mt-50 wow fadeInLeftBig"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <div class="section-title">
                <div class="line"></div>
                <h3 class="title">
                  <span>Crafted for</span> SaaS, App and Software Landing Page
                </h3>
              </div>
              <!-- section title -->
              <p class="text">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                erat, sed diam voluptua. At vero eos et accusam et justo duo
                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                amet, consetetur sadipscing.
              </p>
              <a href="#" class="main-btn">Try it Free</a>
            </div>
            <!-- about content -->
          </div>
          <div class="col-lg-6">
            <div
              class="about-image text-center mt-50 wow fadeInRightBig"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <img src="assets/images/about3.svg" alt="about" />
            </div>
            <!-- about image -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
      <div class="about-shape-1">
        <img src="assets/images/about-shape-1.svg" alt="shape" />
      </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== ABOUT PART ENDS ======-->

    <!--====== VIDEO COUNTER PART START ======-->

    <section id="facts" class="video-counter pt-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div
              class="video-content mt-50 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <img class="dots" src="assets/images/dots.svg" alt="dots" />
              <div class="video-wrapper">
                <div class="video-image">
                  <img src="assets/images/video.png" alt="video" />
                </div>
                <div class="video-icon">
                  <a
                    href="https://ak.picdn.net/shutterstock/videos/1025738153/preview/stock-footage-in-technology-research-facility-female-project-manager-talks-with-chief-engineer-they-consult.webm"
                    class="video-popup"
                    ><i class="lni-play"></i
                  ></a>
                </div>
              </div>
              <!-- video wrapper -->
            </div>
            <!-- video content -->
          </div>
          <div class="col-lg-6">
            <div
              class="counter-wrapper mt-50 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.8s"
            >
              <div class="counter-content">
                <div class="section-title">
                  <div class="line"></div>
                  <h3 class="title">Cool facts <span> this about app</span></h3>
                </div>
                <!-- section title -->
                <p class="text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                  nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua.
                </p>
              </div>
              <!-- counter content -->
              <div class="row no-gutters">
                <div class="col-4">
                  <div
                    class="single-counter counter-color-1 d-flex align-items-center justify-content-center"
                  >
                    <div class="counter-items text-center">
                      <span class="count"
                        ><span class="counter">25</span></span
                      >
                      <p class="text">Subscribers</p>
                    </div>
                  </div>
                  <!-- single counter -->
                </div>
                <div class="col-4">
                  <div
                    class="single-counter counter-color-2 d-flex align-items-center justify-content-center"
                  >
                    <div class="counter-items text-center">
                      <span class="count"
                        ><span class="counter">11</span></span
                      >
                      <p class="text">Active Users</p>
                    </div>
                  </div>
                  <!-- single counter -->
                </div>
                <div class="col-4">
                  <div
                    class="single-counter counter-color-3 d-flex align-items-center justify-content-center"
                  >
                    <div class="counter-items text-center">
                      <span class="count"
                        ><span class="counter">4.8</span></span
                      >
                      <p class="text">User Rating</p>
                    </div>
                  </div>
                  <!-- single counter -->
                </div>
              </div>
              <!-- row -->
            </div>
            <!-- counter wrapper -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>

    <!--====== VIDEO COUNTER PART ENDS ======-->

    <!--====== TEAM PART START ======-->

    <section id="team" class="team-area pt-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="section-title text-center pb-30">
              <div class="line m-auto"></div>
              <h3 class="title"><span>Find some </span> of the best things we create for you</h3>
            </div>
            <!-- section title -->
          </div>
        </div>
        <!-- row -->
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-7 col-sm-8">
            <div
              class="single-team text-center mt-30 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.2s"
            >
              <div class="team-image">
                <img src="photos/undraw_remotely_2j6y.svg" alt="Team" />
                <div class="social">
                  <ul>
                    <li>
                      <a href="#"><i class="lni-facebook-filled"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lni-twitter-filled"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lni-instagram-filled"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lni-linkedin-original"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <h5 class="holder-name"><a href="#">Creating Your </a></h5>
                <p class="text">Documents Fast any time</p>
              </div>
            </div>
            <!-- single team -->
          </div>
          <div class="col-lg-4 col-md-7 col-sm-8">
            <div
              class="single-team text-center mt-30 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <div class="team-image">
                <img src="photos/undraw_researching_22gp.svg" alt="Team" />
                <div class="social">
                  <ul>
                    <li>
                      <a href="#"><i class="lni-facebook-filled"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lni-twitter-filled"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lni-instagram-filled"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lni-linkedin-original"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <h5 class="holder-name"><a href="#">Doing a clean job</a></h5>
                <p class="text">Refer a friend too</p>
              </div>
            </div>
            <!-- single team -->
          </div>
          <div class="col-lg-4 col-md-7 col-sm-8">
            <div
              class="single-team text-center mt-30 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.8s"
            >
              <div class="team-image">
                <img src="photos/undraw_remote_design_team_0hp4.svg" alt="Team" />
                <div class="social">
                  <ul>
                    <li>
                      <a href="#"><i class="lni-facebook-filled"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lni-twitter-filled"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lni-instagram-filled"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lni-linkedin-original"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <h5 class="holder-name"><a href="#">Organized Documents</a></h5>
                <p class="text">Best layouts</p>
              </div>
            </div>
            <!-- single team -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area pt-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="section-title text-center pb-40">
              <div class="line m-auto"></div>
              <h3 class="title">Users sharing<span> their experience</span></h3>
            </div>
            <!-- section title -->
          </div>
        </div>
        <!-- row -->
       
        <div
          class="row testimonial-active wow fadeInUpBig"
          data-wow-duration="1s"
          data-wow-delay="0.8s"
        >
        <?php
                get_all_data($db_connection);
                ?>
            <!-- single testimonial -->
          
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog" class="blog-area pt-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-title pb-35">
              <div class="line"></div>
              <h3 class="title"><span>Our Recent</span> Blog Posts</h3>
            </div>
            <!-- section title -->
          </div>
        </div>
        <!-- row -->
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-7">
            <div
              class="single-blog mt-30 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.2s"
            >
              <div class="blog-image">
                <img src="assets/images/blog-1.jpg" alt="blog" />
              </div>
              <div class="blog-content">
                <ul class="meta">
                  <li>Posted By: <a href="#">Admin</a></li>
                  <li>03 June, 2023</li>
                </ul>
                <p class="text">
                  Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod
                  tempor invidunt labore.
                </p>
                <!-- <a class="more" href="#"
                  >Learn More <i class="lni-chevron-right"></i
                ></a> -->
              </div>
            </div>
            <!-- single blog -->
          </div>
          <div class="col-lg-4 col-md-7">
            <div
              class="single-blog mt-30 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <div class="blog-image">
                <img src="assets/images/blog-2.jpg" alt="blog" />
              </div>
              <div class="blog-content">
                <ul class="meta">
                  <li>Posted By: <a href="#">Admin</a></li>
                  <li>03 June, 2023</li>
                </ul>
                <p class="text">
                  Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod
                  tempor invidunt labore.
                </p>
                <!-- <a class="more" href="#"
                  >Learn More <i class="lni-chevron-right"></i
                ></a> -->
              </div>
            </div>
            <!-- single blog -->
          </div>
          <div class="col-lg-4 col-md-7">
            <div
              class="single-blog mt-30 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.8s"
            >
              <div class="blog-image">
                <img src="assets/images/blog-3.jpg" alt="blog" />
              </div>
              <div class="blog-content">
                <ul class="meta">
                  <li>Posted By: <a href="#">Admin</a></li>
                  <li>03 June, 2023</li>
                </ul>
                <p class="text">
                  Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod
                  tempor invidunt labore.
                </p>
                <!-- <a class="more" href="#"
                  >Learn More <i class="lni-chevron-right"></i
                ></a> -->
              </div>
            </div>
            <!-- single blog -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->
    <!--====== lOCATION PART START ======-->

<section id="about" class="about-area pt-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div
          class="about-content mt-50 wow fadeInLeftBig"
          data-wow-duration="1s"
          data-wow-delay="0.5s"
        >
          <div class="section-title">
            <div class="line"></div>
            <form action="review.php" method="post" class="offset-md-1 col-md-12" style="z-index:2; background-color: #f7f7f7; border-radius:20px;">
        <h3>Review Our Website : </h3>
        
        <div class="row mb-2">
          <div class="col-md-6">
            <input
              type="text"
              name="firstname"
              placeholder="First Name"
              class="form-control"
              required
            />
          </div>
          <div class="col-md-6">
            <input
              type="text"
              name="lastname"
              placeholder="Surname"
              class="form-control"
              required
            />
          </div>
        </div>
        
        
        <div class="mb-2">
        <input
            type="email"
            name="email"
            placeholder="Email"
            class="form-control"
            required
          />
        </div>
        <div class="mb-2">
        <textarea name="review" placeholder="Your Reviews" rows="5" class="form-control" required></textarea>
        </div>
        

        <button class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s" type="submit">
          Send
        </button>
      </form>
          </div>
          <!-- section title -->
         
        </div>
        <!-- about content -->
      </div>
      <div class="col-lg-6">
        <div class="gmap_canvas">
          <div style="width: 100%">
            <iframe
              width="100%"
              height="400px"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
              src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Artcaffe%20Kenyatta%20Avenue+(Artcaffe%20Kenyatta%20Avenue)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            ></iframe
            ><a href="https://www.maps.ie/route-planner.htm"
              >Our Location , Artcaffe Kenyatta Avenue</a
            >
          </div>
        </div>

        <!-- row -->

        <!-- about image -->
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container -->
  <div class="about-shape-1">
    <img src="assets/images/about-shape-1.svg" alt="shape" />
  </div>
</section>

<!--====== LOCATION PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area pt-120">
      <div class="container">
        <div
          class="subscribe-area wow fadeIn"
          data-wow-duration="1s"
          data-wow-delay="0.5s"
        >
          <div class="row">
            <div class="col-lg-6">
              <div class="subscribe-content mt-45">
                <h2 class="subscribe-title">
                  Subscribe Our Newsletter <span>get reguler updates</span>
                </h2>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="subscribe-form mt-50">
              <form action="subscribe.php" action="post">
                  <input name="email" type="email" placeholder="Enter Your Email" required/>
                  <button class="main-btn" type='submit'>Subscribe</button>
                </form>
              </div>
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- subscribe area -->
        <div class="footer-widget pb-100">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8">
              <div
                class="footer-about mt-50 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.2s"
              >
                <a class="logo" href="#">
                  <img src="photos/undraw_organize_resume_utk5.svg" alt="logo" />
                </a>
                <p class="text">
                  Lorem ipsum dolor sit amet consetetur sadipscing elitr,
                  sederfs diam nonumy eirmod tempor invidunt ut labore et dolore
                  magna aliquyam.
                </p>
                <ul class="social">
                  <li>
                    <a href="#"><i class="lni-facebook-filled"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="lni-twitter-filled"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="lni-instagram-filled"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="lni-linkedin-original"></i></a>
                  </li>
                </ul>
              </div>
              <!-- footer about -->
            </div>
            <div class="col-lg-5 col-md-7 col-sm-7">
              <div class="footer-link d-flex mt-50 justify-content-md-between">
                <div
                  class="link-wrapper wow fadeIn"
                  data-wow-duration="1s"
                  data-wow-delay="0.4s"
                >
                  <div class="footer-title">
                    <h4 class="title">Quick Link</h4>
                  </div>
                  <ul class="link">
                    <li><a href="#">Road Map</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Pricing</a></li>
                  </ul>
                </div>
                <!-- footer wrapper -->
                <div
                  class="link-wrapper wow fadeIn"
                  data-wow-duration="1s"
                  data-wow-delay="0.6s"
                >
                  <div class="footer-title">
                    <h4 class="title">Resources</h4>
                  </div>
                  <ul class="link">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
                <!-- footer wrapper -->
              </div>
              <!-- footer link -->
            </div>
            <div class="col-lg-3 col-md-5 col-sm-5">
              <div
                class="footer-contact mt-50 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.8s"
              >
                <div class="footer-title">
                  <h4 class="title">Contact Us</h4>
                </div>
                <ul class="contact">
                  <li>+809272561823</li>
                  <li>info@gmail.com</li>
                  <li>www.yourweb.com</li>
                  <li>
                    123 Stree New York City , United <br />
                    States Of America 750.
                  </li>
                </ul>
              </div>
              <!-- footer contact -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- footer widget -->
        <div class="footer-copyright">
          <div class="row">
            <div class="col-lg-12">
              <div class="copyright d-sm-flex justify-content-between">
                <div class="copyright-content">
                  <p class="text">
                    Designed and Developed by
                    <a href="https://uideck.com" rel="nofollow">Mbote-Joseph</a>
                  </p>
                </div>
                <!-- copyright content -->
              </div>
              <!-- copyright -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- footer copyright -->
      </div>
      <!-- container -->
      <div id="particles-2"></div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->

    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== Plugins js ======-->
    <script src="assets/js/plugins.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>

    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Particles js ======-->
    <script src="assets/js/particles.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
