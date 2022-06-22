<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="shortcut icon" href="images/favicon.png" type="">
  <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title> Jobster LK | Contact </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/contact.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link rel="shortcut icon" href="https://firebasestorage.googleapis.com/v0/b/lms-02-7f92a.appspot.com/o/Favlogo.png?alt=media&token=779a674b-b399-4fc1-acfd-27160a12e5d7" type="image/x-icon">
  <script src="//code-eu1.jivosite.com/widget/S6dmNbLg5L" async></script>
</head>

<body class="sub_page">
    <div class="hero_area">
        <div class="hero_bg_box">
          <img src="images/header-bg.jpeg" alt="">
        </div>
        <!-- header section strats -->
       <?php  include 'header.php' ?>
        </div>
       <div class="container01">
            <div class="form">
                <div class="contact-info">
                    <h3 class="title">Let's get in touch</h3>
                    <p class="text"> Contact us with the following details. and fillup the form with the details. </p>
                    <div class="info">
                        <div class="social-information"> <i class='bx bx-location-plus'></i>
                            <p>Homagama,Colombo, LK</p>
                        </div>
                        <div class="social-information"> <i class='bx bx-mail-send' ></i>
                            <p> jobster512@gmail.com</p>
                        </div>
                        <div class="social-information"> <i class='bx bxs-phone' ></i>
                            <p>+94 75 205 6898</p>
                        </div>
                    </div>
                    <div class="social-media">
                        <p>Connect with us :</p>
                        <div class="social-icons"> <a href="#"> <i class='bx bxl-facebook'></i> </a> <a href="#"> <i class='bx bxl-twitter' ></i> </a> <a href="#"> <i class='bx bxl-instagram' ></i> </a> <a href="#"> <i class='bx bxl-linkedin' ></i> </a> </div>
                    </div>
                </div>
                <div class="contact-info-form"> <span class="circle one"></span> <span class="circle two"></span>
                    <form action="" method="POST">
                        <h3 class="title" style="Color:white;">Contact us</h3>
                        <div class="social-input-containers"> <input type="text" name="txtname" class="input" placeholder="Name" /> </div>
                        <div class="social-input-containers"> <input type="email" name="txtemail" class="input" placeholder="Email" /> </div>
                        <div class="social-input-containers"> <input type="text" name="txtphone" class="input" placeholder="Phone" /> </div>
                        <div class="social-input-containers textarea"> 
                          <textarea name="txtmessage" class="input" placeholder="Message"></textarea>
                          <button type="submit" name="sendMailBtn" class="btn btn-success">Send Message</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
<?php
include 'DbCon.php';
if(isset($_POST['sendMailBtn']))
{
    $name = mysqli_real_escape_string($DbConnection,$_POST['txtname']);
    $email = mysqli_real_escape_string($DbConnection,$_POST['txtemail']);
    $phone = mysqli_real_escape_string($DbConnection,$_POST['txtphone']);
    $message = mysqli_real_escape_string($DbConnection,$_POST['txtmessage']);

    $sql = "INSERT INTO Tbl_Contact(Conname, Conphone, Conemail, Conmessage) VALUES('$name','$phone','$email','$message')";

    if(mysqli_query($DbConnection,$sql))
    {
      echo '<script>
    
      swal({
        title: "Success!",
        text: "Sending message is successful..",
        icon: "success",
        button: "ok!",
      });
      
      </script>';
    

    }
    else
    {
      echo '<script>
    
      swal({
        title: "Oops!!",
        text: "Sending message is unsuccessful..",
        icon: "error",
        button: "ok!",
      });
      
      </script>';
    }
}
?>

</body>

</html>