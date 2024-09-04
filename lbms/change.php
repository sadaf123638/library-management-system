<?php
include 'connection.php';
?>
<?
if(!empty($_POST['change-btn'])){
  $oldpass = $_POST['oldpass'];
  $newpass = $_POST['newpass'];
  $conpass = $_POST['conpass'];
  if($newpass == $conpass){
    $email = $_SESSION['email'];
    $query = "SELECT * FROM regdb WHERE email = '$email'";
    
    $query_run = mysqli_query($conn, $query);
  }
  $query = "SELECT * FROM regdb WHERE email = '$email'";
$query_run = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($query_run)){
  $pass = $row['pass'];
}
if($pass == $_POST['oldpass']){
  $newpass = $_POST['newpass'];
$email = $_SESSION['email'];
$query = "UPDATE regdb SET pass = '$newpass' WHERE email = '$email'";

  $query_run = mysqli_query($conn, $query);
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

    <title>Change Password</title>
  </head>
  <body>

  <div class="container">
    <div class="card mt-5">
        <div class="card-heading">
            <h1 style="color: #0a4275;">Change Password</h1>
          
        </div>
    </div>

</div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-xl-7 col-md-4">
                <div class="card">
                    <div class="card-body">
                <form method="post">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Current Password</label>
    <input type="password" class="form-control" name="oldpass" id="exampleInputPassword1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">New Password</label>
    <input type="password" class="form-control" name="newpass" id="exampleInputPassword2">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword3" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="conpass" id="exampleInputPassword3">
  </div>
  
 
  <button type="submit" name="change-btn" class="btn btn-primary">Submit</button>
</form>
                </div>
</div>
            </div>
            <div class="col-xl-5 col-md-4">
                <div class="card">
                    <div class="card-body">
                <img src="image/icon1.jpg" style="width: 300px; height: 210px; margin-left: 40px;">
          </div>
         </div>
            </div>
        </div>
        
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-3 mt-5">
               
            <a href="home.php" type="button" class="btn btn-dark float-right">Cancel</a>
            </div>

        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>