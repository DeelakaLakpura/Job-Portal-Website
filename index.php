<?php
include 'DbCon.php';

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 

<!-- mobile menu  -->

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Jobster LK | Official</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link rel="shortcut icon" href="https://firebasestorage.googleapis.com/v0/b/lms-02-7f92a.appspot.com/o/Favlogo.png?alt=media&token=779a674b-b399-4fc1-acfd-27160a12e5d7" type="image/x-icon">
  <link href="css/responsive.css" rel="stylesheet" />
  <script src="//code-eu1.jivosite.com/widget/S6dmNbLg5L" async></script>
  
</head>
<body>
 <!-- particals js  -->
<div id="particles-js"></div>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>

  <!-- header  -->
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="images/header-bg.jpeg" alt="">
    </div>
    <!-- menu section  -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">  <i  style="color:white;" class='bx bxs-ghost bx-md'></i><span style="font-weight: bolder; margin-left:5px;">JOBSTER LK</span></a>
          <!-- To open the main menu on the mobile phone -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class=""></span></button>
          <!-- menu items  -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="companies.php"> COMPANIES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">CONTACT US</a>
              </li>
              <li class="nav-item">
                <div class="col-md-12 mb-4">
                  <button style="background:#00afb9; color: white;" type="button" class="btn btn-unique"><i class="fas fa-plus pr-2" aria-hidden="true"></i><a style="color: white;" href="post_Job.php">POST JOB</a></button>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    
  <!-- header section  -->
<section class="slider_section ">
      <div id="customCarousel1"  class="carousel slide" data-ride="carousel">
        <div class="container">
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6">
                  <div class="detail-box">
                    <h1>
                      Find your next dream job
                    </h1>
                    <p>Jobstar is a best job site in the world with over a million unique visitors every month. Jonstar strives to put job seekers first, giving them free access to search for jobs, post resumes, and research companies. Every day, we connect millions of people to new opportunities. Choose a job you love,and you will never  have to work a day in your life</p> 
                    <br>        
                    <div class="search-box col-md-10">               
                        <form action="search.php" method="get">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                </div>
                                <input name="k"  type="text" class="form-control" size="50" value="<?php echo $_GET['k'];?>" placeholder="Enter Job Title">
                                <div class="input-group-append">
                                    <button class="btn btn-success" name="" type="submit"><i class='bx bx-search-alt-2 '></i> Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
        </div>
      <!-- end header  -->
    </section>
</div>
</div>
    <!-- end header section -->

  
<section style = "background-color: #f1f1f1;
opacity: 0.8;
background-image:  radial-gradient(#444cf7 0.75px, transparent 0.75px), radial-gradient(#444cf7 0.75px, #f1f1f1 0.75px);
background-size: 30px 30px;
background-position: 0 0,15px 15px;">
     <!-- logo slider section  -->
   <section>
     <div class="logo-slider">
	<div class="logo-slide-track">
		<div class="slide">
			<img src="images/logos/logo01.png" width="180px" height="80px" alt="" />
		</div>
		<div class="slide" >
    <img src="images/logos/logo02.png" width="180px" height="80px" alt="" />
		</div>
		<div class="slide">
    <img src="images/logos/logo03.png" width="180px" height="80px" alt="" />
		</div>
		<div class="slide">
    <img src="images/logos/logo04.png" width="180px" height="80px" alt="" />
		</div>
		<div class="slide">
    <img src="images/logos/logo05.png" width="180px" height="80px" alt="" />
		</div>
		<div class="slide">
    <img src="images/logos/logo06.png" width="180px" height="80px" alt="" />
		</div>
		<div class="slide">
    <img src="images/logos/logo07.png" width="180px" height="80px" alt="" />
		</div>
		<div class="slide">
    <img src="images/logos/logo08.png" width="180px" height="80px" alt="" />
		</div>
		<div class="slide">
    <img src="images/logos/logo01.png" width="180px" height="80px" alt="" />
		</div>
		<div class="slide">
    <img src="images/logos/logo02.png" width="180px" height="80px" alt="" />
		</div>
		<div class="slide">
    <img src="images/logos/logo03.png" width="180px" height="80px" alt="" />
		</div>
		<div class="slide">
    <img src="images/logos/logo04.png" width="180px" height="80px" alt="" />
		</div>
	</div>
</div>
   </section>

    <!-- end logo slider secion  -->
<br>

    <!-- treanding jobs section with PHP  -->
    <section>
         <div class="container mb-5 ">
        <div class="text-center mb-3"> <span class="text-danger">Premium Jobs</span>
            <h3>Trending Jobs</h3>
        </div>  
        <div class="container mt-0 mb-3">
            <div class="row">
            <?php   
            $sql = "SELECT id,jobname,jobsalary,jobemail,jobdsc,jobcompany,jobdeadline,jobSection,jobType,comCity FROM Tbl_Jobs WHERE jobSection ='Trending Jobs';";
            $resultset = mysqli_query($DbConnection, $sql) or die("database error:". mysqli_error($DbConnection));          
            while( $record = mysqli_fetch_assoc($resultset) ) {
            ?>
                <div class="col-md-4">
                    <div class="card px-4 pt-4 pb-4 mx-auto mt-5">
                      <div class="row"> <i class='bx bxs-ghost bx-sm'></i>
                      <form method="POST" action="job_Application.php">
                            <h5 name="job" class="align-self-center ml-2"><?php  echo $record['jobcompany']; ?></h5>
                            <div class="ml-auto"><span class="text-success"><?php echo $record['jobType']; ?></span></div>
                        </div><br>
                        <h4 style="color:#00afb9;"><?php echo $record['jobname']; ?></h4>
                        <div style="display: flex;">
                        <i style="margin-top: 26px;" class="fas fa-money-bill-wave-alt"></i> <h6 class="mt-4 mb-2">&nbsp;Salary: <?php echo 'Rs. ',$record['jobsalary'];?></h6>
                        </div><br>
                        <div style="display: flex;">
                        <i style="margin-top: 3px;" class="fas fa-map-marker-alt"></i><p> &nbsp;Location: <?php echo $record['comCity']; ?></p>
                        </div>
                        <div style="display: flex;">
                        <i style="margin-top: 20px;" class="fas fa-newspaper"></i>  <p style="color: red;" class="mt-3 mb-2">&nbsp;Application deadline: <?php echo $record['jobdeadline']; ?></p>
                        </div><br>
                      <button name="btn" class="btn btn-dark mb-2"><a style="color: white;" ><span style="color: white;"> Apply Job</span></a></button> <button class="btn info"></button>
                      <input name="txtid" style="visibility: hidden; display: none;" value="<?php echo $record['id']; ?>" >
                      <input name="txtname" style="visibility: hidden; display: none;" value="<?php echo $record['jobname']; ?>" >
                      <input name="txtdesc" style="visibility: hidden; display: none;" value="<?php echo $record['jobdsc']; ?>" >
                      <input name="txtcom" style="visibility: hidden; display: none;" value="<?php echo $record['jobcompany']; ?>" >
                      <input name="txtsal" style="visibility: hidden; display: none;" value="<?php echo $record['jobsalary']; ?>" >
                      <input name="txtloc" style="visibility: hidden; display: none;" value="<?php echo $record['comCity']; ?>" >
                      <input name="txttype" style="visibility: hidden; display: none;" value="<?php echo $record['jobType']; ?>" >
                      <input name="txtemail" style="visibility: hidden; display: none;" value="<?php echo $record['jobemail']; ?>" >
                    </div>
                </div>
              </form>
               
                <?php
                        $s = $_POST["txtid"];  
                        $w = $_POST["txtname"];  
                        $x = $_POST["txtdesc"];  
                        $y = $_POST["txtcom"];  
                        $z = $_POST["txtsal"];  
                        $a = $_POST["txtloc"];  
                        $b = $_POST["txttype"]; 
                        $c = $_POST["txtemail"]; 
                }?>
           
               
  </section>
  <br>
        <!-- end treanding jobs section with PHP  -->
       
 <Section class = "d-flex justify-content-center">
                <a href = "https://www.premiumbeat.com/royalty-free/music-for-filmmakers-and-video-editors?c3api=9782%2C127346241485%2C556849069900&gclid=EAIaIQobChMI-8iR6YXA9gIVDQMrCh23Hg2DEAEYASAAEgIAFPD_BwE&utm_campaign=PB_GMAPAC_lggeneric_Filmmakers&utm_content=Filmmakers_EN_image_Filmmakers&utm_medium=acq_display&utm_source=adwords" target = "_blank"><img src = "https://firebasestorage.googleapis.com/v0/b/lms-02-7f92a.appspot.com/o/image03.png?alt=media&token=6946b720-1bc0-400e-a087-fc61466d12c0" width = "100%"></a>
                </Section>
      <br><br>          

       <!-- favorite jobs section with PHP   -->
  <section>
    <div class="container mb-5 ">
      <div class="text-center mb-3"> <span class="text-danger">More Jobs</span>
          <h3>Favorite Jobs</h3><br><br>
      </div> 
      <div class="container mt-0 mb-3">
            <div class="row">  
          <?php
            $sql = "SELECT jobname,jobdsc,jobsalary,jobemail,jobcompany,jobdeadline,jobSection,jobType,comCity FROM Tbl_Jobs WHERE jobSection ='Favorite Jobs';";
            $resultset = mysqli_query($DbConnection, $sql) or die("database error:". mysqli_error($DbConnection));          
            while( $record = mysqli_fetch_assoc($resultset) ) {
            ?>
              <div class="col-md-4">
        <div class="card p-3 mb-2">
          <form action="job_Application.php" method="post">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                    <div class="icon"> <i class='bx bxs-ghost'></i> </div>
                    <div class="ms-2 c-details">
                     <h6 style="margin-left: 10px;"  class="mb-0"><?php echo $record['jobcompany']?></h6> 
                    </div>
                </div>
                <div class="badge"> <span><?php echo $record['jobType'] ?></span> </div>
            </div>
            <div class="mt-5">
                <h3 class="heading"><?php echo $record['jobname'] ?></h3>
                <div style="display: flex;">
                        <i style="margin-top: 26px;" class="fas fa-money-bill-wave-alt"></i> <h6 class="mt-4 mb-2">&nbsp;Salary: <?php echo 'Rs. ',$record['jobsalary'];?></h6>
                        </div><br>
                        <div style="display: flex;">
                        <i style="margin-top: 3px;" class="fas fa-map-marker-alt"></i><p> &nbsp;Location: <?php echo $record['comCity']; ?></p>
                        </div>
                        <div style="display: flex;">
                        <i style="margin-top: 20px;" class="fas fa-newspaper"></i>  <p style="color: red;" class="mt-3 mb-2">&nbsp;Application deadline: <?php echo $record['jobdeadline']; ?></p>
                        </div><br>
                        <button name="btn" class="btn btn-dark mb-2"><a style="color: white;" ><span style="color: white;"> Apply Job</span></a></button> <button class="btn info"></button>
                        <input name="txtid" style="visibility:collapse;" value="<?php echo $record['id']; ?>" >
                    </div>
                    <input name="txtname"  style="visibility: hidden; display: none;" value="<?php echo $record['jobname']; ?>" >
                      <input name="txtdesc"  style="visibility: hidden; display: none;" value="<?php echo $record['jobdsc']; ?>" >
                      <input name="txtcom"   style="visibility: hidden; display: none;" value="<?php echo $record['jobcompany']; ?>" >
                      <input name="txtsal"  style="visibility: hidden; display: none;"  value="<?php echo $record['jobsalary']; ?>" >
                      <input name="txtloc"  style="visibility: hidden; display: none;" value="<?php echo $record['comCity']; ?>" >
                      <input name="txttype"  style="visibility: hidden; display: none; " value="<?php echo $record['jobType']; ?>" >
                      <input name="txtemail" style="visibility: hidden; display: none;" value="<?php echo $record['jobemail']; ?>" >

                    </form>
                    
                  </div>
                 
                     <br>
                </div>       
              <?php
               $s = $_POST["txtid"];  
               $w = $_POST["txtname"];  
               $x = $_POST["txtdesc"];  
               $y = $_POST["txtcom"];  
               $z = $_POST["txtsal"];  
               $a = $_POST["txtloc"];  
               $b = $_POST["txttype"]; 
               $c = $_POST["txtemail"]; 
              }?>

              
    </section>
  <!-- end favorite jobs section with PHP   -->



  <section>
    <section class="video  py-3" aria-label="Video Section" >
        <div class="text-center mb-3"> <span class="text-danger">JOBSTER LK</span>
            <h3>What is the Jobster LK</h3><br><br>
        </div>  
          <div class="container"> 
              <div class="row d-md-flex">
                  <div class="col-md-6 flex-md-column">
                      <div class="embed-responsive embed-responsive-16by9">
                          <iframe width="560" height="315" src="https://firebasestorage.googleapis.com/v0/b/lms-02-7f92a.appspot.com/o/Explainer%20Video%20Toolkit_free.mp4?alt=media&token=f155814c-4f67-47e5-867e-a05c12f30bcb" frameborder="0" allow="" allowfullscreen></iframe>
                      </div>
                  </div>
      
                  <div class="col-md-3 my-3 my-md-0 flex-md-column">
                      <div class="watch-video h-100 bg-white p-3">
                          <h4><a href="https://www.youtube.com/watch?v=IYU9tdHkJqg"><strong>Create CV</strong></a></h4>
                          <p class="video-data">Published on March 15, 2021</p>
                          <div class="embed-responsive embed-responsive-16by9">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/IYU9tdHkJqg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                          </div>
                          <p class="pt-3"><small><a aria-label="Watch Video 2" href="https://www.youtube.com/watch?v=IYU9tdHkJqg" target="_blank">Watch Video</a></small></p>
                      </div>
                  </div>
      
                  <div class="col-md-3 flex-md-column">
                      <div class="watch-video h-100 bg-white p-3">
                          <h4><a href="https://www.youtube.com/watch?v=1mHjMNZZvFo"><strong>Interview question</strong></a></h4>
                          <p class="video-data">Published on March 11, 2021</p>
                          <div class="embed-responsive embed-responsive-16by9">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/1mHjMNZZvFo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                          </div>
                          <p class="pt-3"><small><a aria-label="Watch Video 2" href="https://www.youtube.com/watch?v=1mHjMNZZvFo" target="_blank">Watch Video</a></small></p>			
                      </div>
                  </div>
              </div>
             
        </div>
      </section>
  </section>
  
<br><br><br>
 <section>
  <div class="container mt-100 mt-60">
    <div class="row">
        <div class="col-12 text-center">
            <div class="section-title mb- pb-2">
            <div class="container mb-5 ">
        <div class="text-center mb-3"> <span class="text-danger">Career Advice</span>
           <h3>Choose a job you love, and you will never have to work a day in your life...</h3>
        </div>       
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div class="blog-post rounded border bg-white">
                <div class="blog-img d-block overflow-hidden position-relative">
                    <img src="images/CV.jpg" class="img-fluid rounded-top" alt="">
                    <div class="overlay rounded-top bg-dark"></div>
                    <div class="post-meta">
                        <a href="javascript:void(0)" class="text-light d-block text-right like"><i class="mdi mdi-heart"></i> 01</a>
                        <a href="post/post01.php" class="text-light read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="content p-3  ">
                    <small class="text-muted p float-right">2nd feb, 22</small>
                    <small><a href="javascript:void(0)" class="text-primary">CV Writing</a></small>
                    <h4 class="mt-2"><a href="post/post01.php" class="text-dark title">How to make a CV for a job.</a></h4>
                    <p class="text-muted mt-2">What is a CV? CV, also called Resume, stands for curriculum vitae.</p>
                    <div class="pt-3 mt-3 border-top d-flex">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid avatar avatar-ex-sm rounded-pill mr-3 shadow" alt="">
                        <div class="author mt-2">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark name">Admin(JOBSTER LK)</a></h6>
                        </div>
                    </div>
                </div>
            </div><!--end blog post-->
        </div><!--end col-->
        
        <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div class="blog-post rounded border bg-white">
                <div class="blog-img d-block overflow-hidden position-relative">
                    <img src="images/career.jpg" class="img-fluid rounded-top" alt="">
                    <div class="overlay rounded-top bg-dark"></div>
                    <div class="post-meta">
                        <a href="post/post02.php" class="text-light d-block text-right like"><i class="mdi mdi-heart"></i> 02</a>
                        <a href="post/post02.php" class="text-light read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="content p-3">
                    <small class="text-muted p float-right">3rd feb, 22</small>
                    <small><a href="post/post02.php" class="text-primary">Post</a></small>
                    <h4 class="mt-2"><a href="post/post02.php" class="text-dark title">How to find your first job</a></h4>
                    <p class="text-muted mt-2">The following steps outline the best way of obtaining your first job, Why is your first job important?</p>
                    <div class="pt-3 mt-3 border-top d-flex">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid avatar avatar-ex-sm rounded-pill mr-3 shadow" alt="">
                        <div class="author mt-2">
                            <h6 class="mb-0"><a href="post/post02.php" class="text-dark name">Admin(JOBSTER LK)</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!--end blog post-->
        </div><!--end col-->
        
        <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div class="blog-post rounded border bg-white">
                <div class="blog-img d-block overflow-hidden position-relative">
                    <img src="images/resume.jpg" class="img-fluid rounded-top" alt="">
                    <div class="overlay rounded-top bg-dark"></div>
                    <div class="post-meta">
                        <a href="post/post03.php" class="text-light d-block text-right like"><i class="mdi mdi-heart"></i> 03</a>
                        <a href="post/post03.php" class="text-light read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="content p-3">
                    <small class="text-muted p float-right">4th feb, 22</small>
                    <small><a href="jpost/post03.php" class="text-primary">Post</a></small>
                    <h4 class="mt-2"><a href="post/post03.php" class="text-dark title">Negotiate the best offer.</a></h4>
                    <p class="text-muted mt-2">How to Accept a Job Offer,Looking for Job Offers?

</p>
                    <div class="pt-3 mt-3 border-top d-flex">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid avatar avatar-ex-sm rounded-pill mr-3 shadow" alt="">
                        <div class="author mt-2">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark name">Admin(JOBSTER LK)</a></h6>
                        </div>
                    </div>
                </div>
            </div><!--end blog post-->
        </div><!--end col-->
    </div><!--end row-->
 </section>
 
 <section>
 <div class="container">
    <!-- Button trigger modal -->
    <div class="row my-btn">

    </div> <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body pl-5 mt-3">
                    <div class="row">
                        <div class="col text-center">
                            <h5 class="font-weight-bold">What do you think of our site?</h5>
                            <p class="text-muted ">Tell us your thoughts about our site.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-auto example-block text-center"><label class="radio-inline"> <input type="radio" name="emotion" id="sad" class="input-hidden" /><img src="https://img.icons8.com/color/100/000000/boring.png" width="84" height="84"></label></div>
                        <div class="col-auto example-block text-center"> <label class="radio-inline"> <input type="radio" name="emotion" id="happy" class="input-hidden" /> <img src="https://img.icons8.com/color/100/000000/bored.png" width="84" height="84"> </label> </div>
                        <div class="col-auto example-block text-center"> <label class="radio-inline"> <input type="radio" name="emotion" id="exicetd" class="input-hidden" /> <img src="https://img.icons8.com/color/100/000000/smiling.png " width="84" height="84"> </label> </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <div class="custom-control custom-checkbox checkbox-lg space"><input type="checkbox" class="custom-control-input" id="checkbox-2"><label class="custom-control-label" for="checkbox-2">Dont' show this again</label> </div> <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
 </section>
 <section>
 <div class="newsletter-subscribe mt-5 container">
    <div class="container">
        <div class="intro">
            <h2 class="text-center newsletter">Subscribe to our Newsletter</h2>
            <p class="text-center">If you want to know about our latest news, updates subscribe our newsletter. Stay in with us everyday to know about latest job oppertunites to succeed your life. </p>
        </div>
        <form class="form-inline" method="POST">
            <div class="form-group"><input class="form-control" type="email" name="NsubEmail" placeholder="Your Email"></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" name="ntbSub"><i class="fas fa-envelope-open"></i> Subscribe </button></div>
        </form>
    </div>
</div>
 </section>
 </section>
<section>
    <br><br>
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section
          class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
        >
          <!-- Left -->
          <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
          </div>
          <!-- Left -->
      
          <!-- Right -->
          <div>
            <a href="" class="me-4 text-reset">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
              <i class="fab fa-google"></i>
            </a>
           
          </div>
          <!-- Right -->
        </section>
          <!-- job application data send to database  -->
      <?php
      
      if(isset($_POST['send']))
      {
    
    $name = mysqli_real_escape_string($DbConnection,$_POST['applicantName']);
    $email = mysqli_real_escape_string($DbConnection,$_POST['applicantEmail']);
    $phone = mysqli_real_escape_string($DbConnection,$_POST['applicantPhone']);
    $job = mysqli_real_escape_string($DbConnection,$_POST['jobtitle']);
    $comname = mysqli_real_escape_string($DbConnection,$_POST['comname']);
    $comemail = mysqli_real_escape_string($DbConnection,$_POST['jobemail']);
    $newsletter = mysqli_real_escape_string($DbConnection,$_POST['NsubEmail']);
   $quilification = mysqli_real_escape_string($DbConnection,$_POST['message']);
    $sql = "INSERT INTO Tbl_Applicant(ApplicentName, ApplicantEmail, ApplicantPhone, JobTitle, ComName, comemail, cv) VALUES('$name','$email','$phone','$job','$comname','$comemail','$quilification')";

    if(mysqli_query($DbConnection,$sql))
    {
      echo '<script>
    
      swal({
        title: "Success!",
        text: "Application insterted Sucessfullly..",
        icon: "success",
        button: "OK!",
      });
      
      </script>';
    

    }
    else
    {
      echo '<script>
    
      swal({
        title: "Oops!!",
        text: "Application insterted not Sucessfullly..",
        icon: "error",
        button: "OK!",
      });
      
      </script>';
    }    
      }

       
       if(isset($_POST['ntbSub']))
      {
    
  
    $newsletter = mysqli_real_escape_string($DbConnection,$_POST['NsubEmail']);
  $newssql = "INSERT INTO Tbl_Newsletter(emails) VALUES('$newsletter')";
    if(mysqli_query($DbConnection,$newssql))
    {
      echo '<script>
    
      swal({
        title: "Success!",
        text: "Thank You..",
        icon: "success",
        button: "OK!",
      });
      
      </script>';
    

    }
    else
    {
      echo '<script>
    
      swal({
        title: "Oops!!",
        text: "Something went wrong..",
        icon: "error",
        button: "OK!",
      });
      
      </script>';
    }    
      }

      ?>
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                <i class='bx bxs-ghost '></i></i> JOBSTER LK
                </h6>
               <p>
                Jobstar is a best job site in the world with over a million unique visitors every month. Jonstar strives to put job seekers first, giving them free access to search for jobs, post resumes, and research companies. Every day, we connect millions of people to new opportunities. 
                Choose a job you love,and you will never  have to work a day in your life
               </p>
              </div>
              <!-- Grid column -->
      
           
      
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Useful links
                </h6>
                <p>
                  <a href="companies.php" class="text-reset">Companies</a>
                </p>
                <p>
                  <a href="about.php" class="text-reset">About us</a>
                </p>
                <p>
                  <a href="contact.php" class="text-reset">Contact Us</a>
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Contact
                </h6>
                <p><i class="fas fa-home me-3"></i> Homagama,Colombo, LK</p>
                <p>
                  <i class="fas fa-envelope me-3"></i>
                  jobster512@gmail.com
                </p>
                <p><i class="fas fa-phone me-3"></i> + 94 75 205 6898</p>
                <p><i class="fas fa-print me-3"></i> + 94 78 131 6093</p>
                <div>
                   <form method="get" action="app/jobster.apk">
   <button  class="btn btn-warning px-2" type="submit"><i class='bx bxs-mobile'></i> Mobile App Download!</button>
</form><br>
                  </div>
                <button type="button" data-toggle="modal" data-target="#modelId"  class="btn btn-success px-3"><i class="fas fa-comments" aria-hidden="true"></i></button>
              </div></div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  --> 
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2022 Copyright:
          <a class="text-reset fw-bold" href="https://jobsterlk.com/">jobsterlk.com</a>
        </div>
        <!-- Copyright -->
      </footer>

</body>
</html>