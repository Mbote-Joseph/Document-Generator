<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />

    <!--====== Title ======-->
    <title>Memo Generator</title>

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
        
      >
        <div class="container"> 
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="header-hero-content text-center" >
              <form action="makememo.php" method="post" class="offset-md-1 col-md-12" style="z-index:2; background-color: #f7f7f7; border-radius:20px; margin-top:-15%">
        <h1>Create your Memo</h1>
        <p>Fill out the details below and the Memo will be downloaded</p>
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
        <div class="row mb-2">
          <div class="col-md-6">
          <input type="date" class="form-control" value="<?php echo $date ?>"
                                min="<?php echo date("Y-m-d"); ?>" name="date" placeholder="Date" required>
          </div>
          <div class="col-md-6">
            <input
              type="text"
              name="target"
              placeholder="Target Audience"
              class="form-control"
              required
            />
          </div>
        </div>
        
        <div class="mb-2">
        <input
            type="text"
            name="subject"
            placeholder="Subject"
            class="form-control"
            required
          />
        </div>
        <div class="mb-2">
        <textarea name="introduction" placeholder="Introduction Paragraph" rows="5" class="form-control" required></textarea>
        </div>
        <div class="mb-2">
        <textarea name="summary" placeholder="Summary" rows="5" class="form-control" required></textarea>
        </div>
        <div class="mb-2">
        <textarea name="conclusion" placeholder="Conclusiom" rows="5" class="form-control" required></textarea>
        </div>
        <div class="mb-2">
        <input
            type="text"
            name="signature"
            placeholder="Signature"
            class="form-control"
            required
          />
        </div>

        <button class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s" type="submit">
          Generate Memo
        </button>
      </form>
              
              </div>
              <!-- header hero content -->
            </div>
            <div class="col-lg-4">
              <img src="photos/undraw_A_day_at_the_park_re_9kxj.svg" alt="hero" style="margin-top: 30%;"  />
              <img src="photos/undraw_launch_day_4e04.svg" alt="hero" style="z-index: -1;"/> 
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
