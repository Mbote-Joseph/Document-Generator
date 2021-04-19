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
              <form action="makeresume.php" method="post" class="offset-md-1 col-md-12" style="z-index:2; background-color: #f7f7f7; border-radius:20px; margin-top:-15%">
        <h1>Create your Resume</h1>
        <p>Fill out the details below and the Resume will be downloaded</p>
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
            <input
              type="text"
              name="title"
              placeholder="Your Title"
              class="form-control"
              required
            />
          </div>
          <div class="col-md-6">
            <input
              type="text"
              name="website"
              placeholder="https://website.com"
              class="form-control"
              required
            />
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-md-6">
          <input
            type="email"
            name="email"
            placeholder="Email Address"
            class="form-control"
            required
          />
          </div>
          <div class="col-md-6">
          <input
            type="text"
            name="phone"
            placeholder="Phone Number"
            class="form-control"
            required
          />
          </div>
        </div>

        <div class="mb-2">
        <input
            type="text"
            name="github"
            placeholder="Github Username"
            class="form-control"
            required
          />
        </div>
        <div class="mb-2">
          
        </div>
        <h3>Introduction</h3>
        <div class="mb-2">
        <textarea name="introduction" placeholder="Introduction Paragraph" rows="5" class="form-control"></textarea>
        </div>
        <h3>Skills</h3>
        <div class="row mb-2">
          <div class="col-md-6">
          <input
            type="text"
            name="skills"
            placeholder="Skill One"
            class="form-control"
            required
          />
          </div>
          <div class="col-md-6">
          <input
            type="text"
            name="skills1"
            placeholder="Skill Two"
            class="form-control"
            
          />
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-md-6">
          <input
            type="text"
            name="skills2"
            placeholder="Skill Three"
            class="form-control"
            
          />
          </div>
          <div class="col-md-6">
          <input
            type="text"
            name="skills3"
            placeholder="Skill Four"
            class="form-control"
            
          />
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-md-6">
          <input
            type="text"
            name="skills4"
            placeholder="Skill Five"
            class="form-control"
            
          />
          </div>
          <div class="col-md-6">
          <input
            type="text"
            name="skills5"
            placeholder="Skill Six"
            class="form-control"
            
          />
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-md-6">
          <input
            type="text"
            name="skills6"
            placeholder="Skill Seven"
            class="form-control"
            
          />
          </div>
          <div class="col-md-6">
          <input
            type="text"
            name="skills7"
            placeholder="Skill Eight"
            class="form-control"
            
          />
          </div>
        </div>
        
        <h3>Education</h3>
        <div class="row mb-2">
          <div class="col-md-4">
          <input
            type="text"
            name="education1"
            placeholder="Education institution"
            class="form-control"
            
          />
          </div>
          <div class="col-md-4">
          <input
            type="text"
            name="date111"
            placeholder="01/01/2021"
            class="form-control"
            
          />
          </div>
          <div class="col-md-4">
          <input
            type="text"
            name="date112"
            placeholder="01/01/2021"
            class="form-control"
            
          />
          </div>
        </div>
        <div class="mb-2">
        <textarea name="qualification1" placeholder="Type you experience" rows="5" class="form-control"></textarea>
        </div>
        <div class="row mb-2">
          <div class="col-md-4">
          <input
            type="text"
            name="education2"
            placeholder="Education institution"
            class="form-control"
            
          />
          </div>
          <div class="col-md-4">
          <input
            type="text"
            name="date121"
            placeholder="01/01/2021"
            class="form-control"
            
          />
          </div>
          <div class="col-md-4">
          <input
            type="text"
            name="date122"
            placeholder="01/01/2021"
            class="form-control"
            
          />
         </div>
        </div>
        <div class="mb-2">
        <textarea name="qualification2" placeholder="Type you experience" rows="5" class="form-control"></textarea>
        </div>
        <div class="row mb-2">
          <div class="col-md-4">
          <input
            type="text"
            name="education3"
            placeholder="Education institution"
            class="form-control"
            
          />
          </div>
          <div class="col-md-4">
          <input
            type="text"
            name="date131"
            placeholder="01/01/2021"
            class="form-control"
            
          />
          </div>
          <div class="col-md-4">
          <input
            type="text"
            name="date132"
            placeholder="01/01/2021"
            class="form-control"
            
          />
          </div>
        </div>
        <div class="mb-2">
        <textarea name="qualification3" placeholder="Type you experience" rows="5" class="form-control"></textarea>
        </div>
        <h3>Experience</h3>
        <div class="row mb-2">
          <div class="col-md-4">
          <input
            type="text"
            name="workplace1"
            placeholder="Work place"
            class="form-control"
            
          />
          </div>
          <div class="col-md-4">
          <input
            type="text"
            name="date11"
            placeholder="01/01/2021"
            class="form-control"
            
          />
          </div>
          <div class="col-md-4">
          <input
            type="text"
            name="date12"
            placeholder="01/01/2021"
            class="form-control"
            
          />
          </div>
        </div>
        <div class="mb-2">
        <textarea name="experience1" placeholder="Type you experience" rows="5" class="form-control"></textarea>
        </div>
        <div class="row mb-2">
          <div class="col-md-4">
          <input
            type="text"
            name="workplace2"
            placeholder="Work place"
            class="form-control"
            
          />
          </div>
          <div class="col-md-4">
          <input
            type="text"
            name="date21"
            placeholder="01/01/2021"
            class="form-control"
            
          />
          </div>
          <div class="col-md-4">
          <input
            type="text"
            name="date22"
            placeholder="01/01/2021"
            class="form-control"
            
          />
         </div>
        </div>
        <div class="mb-2">
        <textarea name="experience2" placeholder="Type you experience" rows="5" class="form-control"></textarea>
        </div>
        <div class="row mb-2">
          <div class="col-md-4">
          <input
            type="text"
            name="workplace3"
            placeholder="Work place"
            class="form-control"
            
          />
          </div>
          <div class="col-md-4">
          <input
            type="text"
            name="date31"
            placeholder="01/01/2021"
            class="form-control"
            
          />
          </div>
          <div class="col-md-4">
          <input
            type="text"
            name="date32"
            placeholder="01/01/2021"
            class="form-control"
            
          />
          </div>
        </div>
        <div class="mb-2">
        <textarea name="experience3" placeholder="Type you experience" rows="5" class="form-control"></textarea>
        </div>
        <h3>Hobbies</h3>
        <div class="row mb-2">
          <div class="col-md-6">
          <input
            type="text"
            name="hobby1"
            placeholder="Hobby One"
            class="form-control"
            required
          />
          </div>
          <div class="col-md-6">
          <input
            type="text"
            name="hobby2"
            placeholder="Hobby Two"
            class="form-control"
            
          />
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-md-6">
          <input
            type="text"
            name="hobby3"
            placeholder="Hobby Three"
            class="form-control"
            
          />
          </div>
          <div class="col-md-6">
          <input
            type="text"
            name="hobby4"
            placeholder="Hobby Four"
            class="form-control"
            
          />
          </div>
        </div>
        <h3>Languages</h3>
        <div class="row mb-2">
          <div class="col-md-6">
          <input
            type="text"
            name="language1"
            placeholder="Language One"
            class="form-control"
            required
          />
          </div>
          <div class="col-md-6">
          <input
            type="text"
            name="language2"
            placeholder="Language Two"
            class="form-control"
            
          />
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-md-6">
          <input
            type="text"
            name="language3"
            placeholder="Language Three"
            class="form-control"
            
          />
          </div>
          <div class="col-md-6">
          <input
            type="text"
            name="language4"
            placeholder="Language Four"
            class="form-control"
            
          />
          </div>
        </div>

        <h3>Technologies <small>(For Developers*)</small> </h3>
        <div class="row mb-2">
          <div class="col-md-6">
          <input
            type="text"
            name="technology1"
            placeholder="Technology One"
            class="form-control"
            
          />
          </div>
          <div class="col-md-6">
          <input
            type="text"
            name="technology2"
            placeholder="Technology Two"
            class="form-control"
            
          />
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-md-6">
          <input
            type="text"
            name="technology3"
            placeholder="Technology Three"
            class="form-control"
            
          />
          </div>
          <div class="col-md-6">
          <input
            type="text"
            name="technology4"
            placeholder="Technology Four"
            class="form-control"
            
          />
          </div>
        </div>
        

        <button class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s" type="submit">
          Generate Your Resume
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
