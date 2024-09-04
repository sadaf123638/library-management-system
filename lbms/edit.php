<?php
include 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Profile</title>
    <style>
       	body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}
    </style>
  </head>
  <body>
  <div class="container">
<div class="row gutters">
	<form method="post">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
	
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="image/icon.jpg" alt="Maxwell Admin" style="width: 200px; height: 120px;">
				</div>
				<h5 class="user-email"><?php echo $_SESSION['email']; ?></h5>
			</div>
			
		</div>
	</div>

</div>

</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
       

				
	<div class="card-body">
	<?php


// Check if the user is logged in
if(isset($_SESSION['id'])) {
    $id = $_SESSION['id']; // Get the logged-in user's ID

    // Modify the SQL query to fetch data only for the logged-in user
    $register = "SELECT * FROM regdb WHERE id = $id";
    $register_run = mysqli_query($conn, $register);

    if(mysqli_num_rows($register_run) > 0) {
?>
                             
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<?php
                         while($reg_row = mysqli_fetch_array($register_run))
                         { 
                         
                             ?>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
				

					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" value="<?php echo $reg_row['name']; ?>" id="fullName" name="name" placeholder="Enter full name">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" id="eMail" value="<?php echo $reg_row['email']; ?>" name="email" placeholder="Enter email ID">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" id="phone" value="<?php echo $reg_row['number']; ?>" name="number" placeholder="Enter phone number">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website">Password</label>
					<input type="url" class="form-control" id="website" value="<?php echo $reg_row['pass']; ?>" name="pass" placeholder="Password">
				</div>
			</div>
			<?php } ?>
		</div>
		<?php
	                     }
                          }
                          else
                          {
                              echo "No Record Found";
                          }
                          ?>


		
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
				<div class="text-right">
                    <a href="home.php" class="btn btn-secondary"  type="button">Cancel</a>
                    <a href="editprofile.php" class="btn btn-primary" name="up-btn" type="button">Edit</a>
					
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</form>
</div>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>