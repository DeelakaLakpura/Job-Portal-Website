<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/contact.css"><link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title> Jobster LK </title>
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />


</head>

<body class="sub_page">
    <div class="hero_area">
        <div class="hero_bg_box">
          <img src="images/header-bg.png" alt="">
        </div>
        <header class="header_section">
        <div class="container d-flex justify-content-left ">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
        <box-icon style="color: white;" type='solid' name='ghost'></box-icon>
          <a class="navbar-brand" href="index.php">
          <i  style="color:white;" class='bx bxs-ghost bx-md'></i>
            <span style="font-weight: bolder; margin-left:5px;">
               JOBSTERLK
            </span>
          </a>
        </nav>
      </div>
        </header>
        </div>
        </div>
<?php
include 'DbCon.php';
$search = $_GET['k'];
$terms = explode(" ",$search);
$query = "SELECT * FROM Tbl_Jobs WHERE  ";
foreach($terms as $each)
{
    $i++;
    if($i == 1)
    $query .= "jobname LIKE  '%$each%'";
    else
    $query .= "OR jobname LIKE '%$each%'";

  
}
$query = mysqli_query($DbConnection, $query);
$numrow = mysqli_num_rows($query);

if($numrow > 0 )
{
    while($row = mysqli_fetch_assoc($query)) {

      ?>
        <form method="POST" action="job_Application.php">
        <div class="col-md-15">
                    <div class="card px-4 pt-4 pb-4 mx-auto mt-5">
                      <div class="row"> <i class='bx bxs-ghost bx-sm'></i>
                      <form method="POST" action="job_Application.php">
                            <h5 name="job" class="align-self-center ml-2"><?php  echo $row['jobcompany']; ?></h5>
                            <div class="ml-auto"><span class="text-success"><?php echo $row['jobType']; ?></span></div>
                        </div><br>
                        <h4 style="color:#00afb9;"><?php echo $row['jobname']; ?></h4>
                        <div style="display: flex;">
                        <i style="margin-top: 26px;" class="fas fa-money-bill-wave-alt"></i> <h6 class="mt-4 mb-2">&nbsp;Salary: <?php echo 'Rs. ',$row['jobsalary'];?></h6>
                        </div><br>
                        <div style="display: flex;">
                        <i style="margin-top: 3px;" class="fas fa-map-marker-alt"></i><p> &nbsp;Location: <?php echo $row['comCity']; ?></p>
                        </div>
                        <div style="display: flex;">
                        <i style="margin-top: 20px;" class="fas fa-newspaper"></i>  <p style="color: red;" class="mt-3 mb-2">&nbsp;Application deadline: <?php echo $row['jobdeadline']; ?></p>
                        </div><br>
                      <button name="btn" class="btn btn-dark mb-2"><a style="color: white;" ><span style="color: white;"> Apply Job</span></a></button> <button class="btn info"></button>
                      <input name="txtid" style="visibility: hidden; display: none;" value="<?php echo $row['id']; ?>" >
                      <input name="txtname" style="visibility: hidden; display: none;" value="<?php echo $row['jobname']; ?>" >
                      <input name="txtdesc" style="visibility: hidden; display: none;" value="<?php echo $row['jobdsc']; ?>" >
                      <input name="txtcom" style="visibility: hidden; display: none;" value="<?php echo $row['jobcompany']; ?>" >
                      <input name="txtsal" style="visibility: hidden; display: none;" value="<?php echo $row['jobsalary']; ?>" >
                      <input name="txtloc" style="visibility: hidden; display: none;" value="<?php echo $row['comCity']; ?>" >
                      <input name="txttype" style="visibility: hidden; display: none;" value="<?php echo $row['jobType']; ?>" >

                    </div>
                </div>
              </form>
<?php } 


    } else
    include 'nodata.php';
    ?>
                    

                      <?php
                       $s = $_POST["txtid"];  
                       $w = $_POST["txtname"];  
                       $x = $_POST["txtdesc"];  
                       $y = $_POST["txtcom"];  
                       $z = $_POST["txtsal"];  
                       $a = $_POST["txtloc"];  
                       $a = $_POST["txttype"]; 
                      
                      ?>
                      
<section>
  <?php  include 'footer.php' ?>
</section>
  
</body>

</html>