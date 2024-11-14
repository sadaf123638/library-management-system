<?php
include 'connection.php';

	if(isset($_POST['issue_book']))
	{
		$bookid = $_POST["bookid"];
		$issue_date = $_POST["issue_date"];
        $return_date = $_POST["return_date"];
        $fine = $_POST["fine"];
        $student_id = $_POST["student_id"];
        
        
       
		$query = "INSERT INTO issuebook_db (bookid, issue_date, return_date, fine, student_id) VALUES ('$bookid', '$issue_date', '$return_date', '$fine', ' $student_id')";
		$query_run = mysqli_query($conn,$query);
		
		if($query_run){
			header("location: is.php");
		}
		else{
			header("location: dash.php");
		}
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>issuebook</title>
  </head>
  <body>
  <?php include 'dashnav.php';?>
   <div class="container">
    <div class="row">
		<div class="col-md-4 mt-4"></div>
        <div class="col-md-4 mt-5">
        <form action="" method="post">
		<div class="mb-3">
    <label for="" class="form-label">Book ID</label>
    <input type="text" name="bookid" class="form-control" id="">
   
  </div>	
  <div class="mb-3">
    <label for="" class="form-label">Issue_date</label>
    <input type="date" name="issue_date" class="form-control" id="">
   
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Return_date</label>
    <input type="date" name="return_date" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fine</label>
    <input type="tel" name="fine" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Student_id</label>
    <input type="tel" name="student_id" class="form-control" id="">
  </div>
  <button type="submit" name="issue_book" class="btn btn-primary">Submit</button>

					
				</form>
        </div>
		<div class="col-md-4 mt-5"></div>
    </div>
   </div>

   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>