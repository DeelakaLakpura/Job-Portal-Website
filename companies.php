<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <title> Jobster | Companies </title>
    <script src="//code-eu1.jivosite.com/widget/S6dmNbLg5L" async></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link rel="shortcut icon" href="https://firebasestorage.googleapis.com/v0/b/lms-02-7f92a.appspot.com/o/Favlogo.png?alt=media&token=779a674b-b399-4fc1-acfd-27160a12e5d7" type="image/x-icon">
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/companies.css">
</head>
<body class="sub_page">
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="images/header-bg.jpeg" alt="">
    </div>
    <?php include 'header.php'  ?>
  </div>
    <section>
      <div class="container mt-0 mb-3">
        <div class="row">
        <?php
            include 'DbCon.php';
            $sql = "SELECT `id`, `comname`, `comemail`, `compass`, `comcity`, `comstaff`, `comprojects`, `comemployee` FROM `Tbl_Companies`;";
            $resultset = mysqli_query($DbConnection, $sql) or die("database error:". mysqli_error($DbConnection));          
            while( $record = mysqli_fetch_assoc($resultset) ) {
            ?>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="tile">
                <div class="wrapper">
                    <div class="header"><b><?php echo $record['comname'] ?></b></div>
  
                    <div class="banner-img">
                      <img src="images/coverimg.png" alt="Image 1">
                    </div>
  
                    <div class="dates">
                        <div class="start">
                            <strong>Location</strong> <?php echo $record['comcity']?>
                            <span></span>
                        </div>
                        <div class="ends">
                            <strong>Company Type</strong> Tech
                        </div>
                    </div>
  
                    <div class="stats">
  
                        <div>
                            <strong>STAFF</strong> <?php echo $record['comstaff']  ?>
                        </div>
  
                        <div>
                            <strong>PROJECTS</strong> <?php echo $record['comemployee']  ?>
                        </div>

                        <div>
                            <strong>EMPLOYESS</strong> <?php echo $record['comemployee']  ?>
                        </div>
  
                    </div>    
                </div>
            </div> 
        </div> 
        <?php
 } 
        ?>
      </section>

        <!-- footer section -->
      <section>
     <?php  include 'footer.php'  ?>
      </section>



</body>

</html>