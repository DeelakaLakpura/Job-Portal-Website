<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="images/Favlogo.png" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="//code-eu1.jivosite.com/widget/S6dmNbLg5L" async></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <title> Jobster LK </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link rel="shortcut icon" href="images/Favlogo.png" type="image/x-icon">
  <script src="js/logo-slide.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/post_job.css">
</head>
<body class="sub_page">
<div class="hero_area">
        <div class="hero_bg_box">
          <img src="images/header-bg.jpeg" alt="">
        </div>
       <?php  include 'header.php' ?>
        </div>
    

<!------ From Switcher ---------->
<script>$(function() {

  $('#login-form-link').click(function(e) {
  $("#login-form").delay(100).fadeIn(100);
   $("#register-form").fadeOut(100);
  $('#register-form-link').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
});
$('#register-form-link').click(function(e) {
  $("#register-form").delay(100).fadeIn(100);
   $("#login-form").fadeOut(100);
  $('#login-form-link').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
});

});
</script>

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="POST">
									<div class="form-group">
										<input type="email" name="logemail"   class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="password" name="logpass" id="logpass" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="btnLog" id="btnLog" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
											
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="comName" id="comName" tabindex="1" class="form-control" placeholder="Company Name" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="text" name="ComLocation" id="ComLocation" tabindex="2" class="form-control" placeholder="Company City">
									</div>
                  <div class="form-group">
										<input type="text" name="ComStaff" id="ComStaff" tabindex="2" class="form-control" placeholder="Company Staff">
									</div>
                  <div class="form-group">
										<input type="text" name="ComEmp" id="ComEmp" tabindex="2" class="form-control" placeholder="Company Employee">
									</div>
                  <div class="form-group">
										<input type="text" name="ComProjects" id="ComProjects" tabindex="2" class="form-control" placeholder="Company Projects">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
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
  <?php  include 'footer.php' ?>
  <?php
include 'DbCon.php';

$CompanyName = mysqli_real_escape_string($DbConnection,$_POST['comName']);
$ComapnyEmail = mysqli_real_escape_string($DbConnection,$_POST['email']);
$ComanpyPassword = mysqli_real_escape_string($DbConnection,$_POST['password']);
$CompanyCity = mysqli_real_escape_string($DbConnection,$_POST['ComLocation']);
$ComapnyStaff = mysqli_real_escape_string($DbConnection,$_POST['ComStaff']);
$CompanyProjects = mysqli_real_escape_string($DbConnection,$_POST['ComProjects']);
$CompanyEmployess = mysqli_real_escape_string($DbConnection,$_POST['ComEmp']);
$sql = "INSERT INTO Tbl_Companies(comname,comemail,compass,comcity,comstaff,comprojects,comemployee)VALUES('$CompanyName','$ComapnyEmail','$ComanpyPassword','$CompanyCity','$ComapnyStaff','$CompanyProjects','$CompanyEmployess')";

if(isset($_POST['register-submit']))
{
   
  if(mysqli_query($DbConnection,$sql))
  {
    echo '<script>
    
    swal({
      title: "Good job!",
      text: "Your company registration success.",
      icon: "success",
      button: "Ok",
    });
    
    
    
    </script>';
  }
  else  echo '<script>
    
  swal({
    title: "Error!",
    text: "Your company registration failed",
    icon: "warning",
    button: "Ok",
  });
  
  
  
  </script>';
  
}
?>   
<?php  

  include 'db_connect.php';
  $email= $_POST['logemail'];
  $password= $_POST['logpass'];
  
  
  if(isset($_POST['btnLog']))
  {
  $sql = "select * from Tbl_Companies where comemail = '$email' and compass = '$password'";  
  $result = mysqli_query($DbConnection, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
  $count = mysqli_num_rows($result);  

  if($count == 1){  

    $url = "http://localhost/jobster/comDash.php?email=".$email;
  echo "<script type='text/javascript'>location.href = '$url';</script>";
      
  }  
  else{  
    echo '<script>
    
    swal({
      title: "Error!",
      text: "Login Failed",
      icon: "warning",
      button: "Ok",
    });
    
    
    
    </script>';
  }     
  
  
  }
  ?>
</body>
</html>