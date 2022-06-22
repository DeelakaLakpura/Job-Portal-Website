<?php
include 'DbCon.php';
if(!isset($_GET['email']))
{
 
    header("Location: post_Job.php");
    exit();

}
$u = $_GET['email'];



	$query = "SELECT id,comname,comcity,comstaff,comemployee,comemail FROM Tbl_Companies WHERE comemail ='$u'  ";
	$query_run = mysqli_query($DbConnection, $query);

	if(mysqli_num_rows($query_run) > 0)
	{
		foreach($query_run as $items)
		{
			$id = $items['id'];
			$cName = $items['comname'];
			$cCity = $items ['comcity'];
			$cStaff = $items ['comstaff'];
			$cEmp = $items ['comemployee'];
		
			
		}
	}
	


?>
<!doctype html>
<html lang="en">
<head>
	<title>Jobster LK | Company Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
      <link rel="shortcut icon" href="https://firebasestorage.googleapis.com/v0/b/lms-02-7f92a.appspot.com/o/Favlogo.png?alt=media&token=779a674b-b399-4fc1-acfd-27160a12e5d7" type="image/x-icon">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
      <script src="//code-eu1.jivosite.com/widget/S6dmNbLg5L" async></script>

	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="css/dash.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="shortcut icon" href="images/Favlogo.png" type="image/x-icon">

</head>

<body>
	<!-- WRAPPER -->
	<div id="">
        
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="images/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				
				
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="post_Job.php" title="Log Out"><i class='bx bxs-log-out'></i> <span>Log Out</span></a>
</div>
				
			</div>
		</nav>
		
		<div class="main">
			
			<div class="main-content">
				<div class="container-fluid">
				
					<div class="panel panel-headline">
						<div class="panel-heading">
							
                            <br><br><br>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon" style="background-color: #6dc77a;"><i class="fa fa-id-card"></i></span>
										<p>
											<span class="number"><?php echo $id  ?></span>
											<span class="title">ID Number</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon" style="background-color: #6dc77a;"><i class="fas fa-university"></i></span>
										<p>
											<span class="number"><?php echo $cCity  ?></span>
											<span class="title">City</span>
										</p>
									</div>
								</div>
								<div  class="col-md-3">
									<div class="metric">
										<span style="background-color: #6dc77a;" class="icon"><i class="fas fa-users"></i></span>
										<p>
											<span class="number"><?php echo $cStaff  ?></span>
											<span class="title">Company Staff</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon" style="background-color: #6dc77a;"><i class="fas fa-user-md"></i></span>
										<p>
											<span class="number"><?php echo $cEmp   ?></span>
											<span class="title">Companay Employees</span>
										</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
		
					<div class="row">
						<div class="col-md-6">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Company Jobs</h3>
									<br>
									<table class="table">
										<thead>
											<tr>
										
												<th>Job Name</th>
												<th>Job Salary</th>
												<th>Deadline Date</th>
												<th>Job Type</th>
											</tr>
									<?php
            
            $sql = "SELECT id,jobname,jobsalary,jobcompany,jobdeadline,jobSection,jobType FROM Tbl_Jobs WHERE jobemail ='$u';";
            $resultset = mysqli_query($DbConnection, $sql) or die("database error:". mysqli_error($DbConnection));          
            while( $record = mysqli_fetch_assoc($resultset) ) {
            ?>	
								</div>
								<div class="panel-body no-padding">
									
										</thead>
										<tbody>
											<tr>
											
												<td><a href="#"><?php echo $record['jobname']?></a></td>
												<td>Rs. <?php echo $record['jobsalary']?></td>
												<td><?php echo $record['jobdeadline']?></td>
												<td><?php echo $record['jobType']?></td>
										
											</tr>
											<?php
 } 
        ?>
   
										</tbody>
									</table>
								</div>	
							</div>
						
							<div class="col-md-16">
							<div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Job Applicents</h3>
                                    <br>
                                    <table class="table" border="1">
                                        <thead>
                                            <tr>
                                        
                                                <th>Job</th>
                                                <th>Contact</th>
                                                <th>Quilifications</th>
                                            </tr>
                                    <?php
            
            $sql = "SELECT * FROM Tbl_Applicant WHERE comemail ='$u';";
            $resultset = mysqli_query($DbConnection, $sql) or die("database error:". mysqli_error($DbConnection));          
            while( $record = mysqli_fetch_assoc($resultset) ) {
            ?>  
                                </div>
                                <div class="panel-body no-padding">
                        
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#"><?php echo $record['JobTitle']?></a></td>
                                                <td><b style="color:#63c76a">Name:</b><?php echo $record['ApplicentName']?>
                                                <br><p><b style="color:#63c76a">Phone:</b><?php echo $record['ApplicantPhone']?></p>
                                               <p><b style="color:#63c76a">Email:</b> <?php echo $record['ApplicantEmail']?></p></td>
												<td><?php echo $record['cv']?></td>
                                            </tr>
                                            <?php
 } 
        ?>
   
                                        </tbody>
                                    </table>
                                </div>
                            </div>

						
						</div>
					
						
						</div>
						
						
						<div class="col-md-6">
						
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Add New Vacancy</h3>
									
								</div>
								<div class="panel-body">
								<form method="POST">
                                <label for="">Job Title <span style="color: red;">*</span></label>
                             <div>
                             <input class="form-control" name="jobtitle" type="text" required placeholder="Job Title">
                             </div><br>
                                <label for="">Salary<span style="color: red;">*</span></label>
                                <div class="input-group">
                                   <span class="input-group-addon">Rs.</span>
  								<input type="text" class="form-control" name="salary"  required>
 								 <span class="input-group-addon">.00</span>
								</div><br>
								<label for="">Phone Number <span style="color: red;">*</span></label>
                             <div>
                             <input class="form-control" name="comphone" type="text" placeholder="Phone Number" required>
                             </div><br>
								<label for="">Email <span style="color: red;">*</span></label>
								<div class="mb-3">
    						<input type="text" class="form-control" name="comemail"  placeholder="Email"required readonly="true" value="<?php echo $u ?>" >
   							 <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  							</div><br>
							  <label for="">Company Name <span style="color: red;">*</span></label>
								<div class="mb-3">
    						<input type="text" class="form-control" name="cname" required readonly="true" value="<?php echo $cName ?>" >
  							</div><br>
							  <label for="">Company Location <span style="color: red;">*</span></label>
								<div class="mb-3">
    						<input type="text" class="form-control" name="cLocation"  placeholder="Email"required readonly="true" value="<?php echo $cCity ?>" >
   							
  							</div><br>
  							<label for="">Application deadline date <span style="color: red;">*</span></label>
 							 <div class="form-group">
								<input type="date" name="jobdead"  class="form-control" required >
								</div><br>
								<label for="">Select job type <span style="color: red;">*</span></label>
								<div>
							<select class="selectpicker form-control border-0 mb-1 px-4 py-4 rounded shadow" name="jobtype" required>
                            <option value="">Select type</option>
							<option value="Part Time">Part Time</option>
							<option value="Full Time">Full Time</option>
                        </select>
						</div><br>
								<label for="">Select job section <span style="color: red;">*</span></label>
								<div>
							<select class="selectpicker form-control border-0 mb-1 px-4 py-4 rounded shadow" name="jobsec" required>
                            <option value="">Select Section</option>
							<option value="Trending Jobs">Trending Jobs</option>
							<option value="Favorite Jobs">Favorite Jobs</option>
                        </select>
						</div>
						<br>
  						<div class="form-group">
 						 <label for="exampleFormControlTextarea2">Job Description <span style="color: red;">*</span></label>
 						 <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" name="jobdesc" required rows="9"></textarea>
						</div><br>
						<div class="col-md-12">

							<button name="btnJob" style="background-color: #6dc77a; color:white;" type="submit" class="btn btn-elegant"><i class="fab fa-usps"></i> <b>  Post Job</b></button>

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
	</div>

	
	<?php


$jname= $_POST['jobtitle'];
$jdesc= $_POST['jobdesc'];
$jsal = $_POST['salary'];
$jphone= $_POST['comphone'];
$jcom = $_POST['cname'];
$jdeadline = $_POST['jobdead'];
$jemail = $_POST['comemail'];
$jsection = $_POST['jobsec'];
$jType = $_POST['jobtype'];
$jCity = 	$_POST['cLocation'];
if(isset($_POST['btnJob']))

{


  $sql = "INSERT INTO Tbl_Jobs(jobname, jobdsc, jobsalary, jobphone, jobcompany, jobdeadline, jobemail, jobSection, jobType,comCity) VALUES ('$jname','$jdesc','$jsal','$jphone','$jcom','$jdeadline','$jemail','$jsection','$jType','$jCity')";

  if(mysqli_query($DbConnection, $sql))
  {
    echo '<script>
    
    swal({
      title: "Success!",
      text: "Job insterted Sucessfullly..",
      icon: "success",
      button: "ok!",
    });
    
    </script>';
	

  }else
  {
    echo '<script>
    
    swal({
      title: "Oops!!",
      text: "Job insterted not Sucessfullly..",
      icon: "error",
      button: "ok!",
    });
    
    </script>';
	exit();
  }


}


  ?>
</div>



</body>

</html>
