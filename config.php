
	<?php

include 'DbCon.php';
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
   header("Location: comDash.php");

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


