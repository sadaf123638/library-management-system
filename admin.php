<?php

include 'connection.php';

if(isset($_POST["adminlog-btn"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM adminreg WHERE email = '$email' ");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            $_SESSION["email"] = $row["email"];
            header("location: dash.php");
            exit(); // Add exit to prevent further execution

        }
        else{
            echo 
            "<script>
            alert('Wrong password !');
            </script>";
        }

    }
    else{
        echo 
        "<script>
        alert('User not register');
        </script>";
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Admin Login</title>
    <style>
        body{
    background-color:#5286F3;
    font-size:14px;
    color:#fff;
}
.simple-login-container{
    width:300px;
    max-width:100%;
    margin:50px auto;
}
.simple-login-container h2{
    text-align:center;
    font-size:20px;
}

.simple-login-container .btn-login{
    background-color:#FF5964;
    color:#fff;
}
a{
    color:#fff;
}
    </style>
  </head>
  <body>
  <?php include 'nav.php';?>


    <div class="container">
        <div class="card">
            <div class="card-heading">
                <h1>Admin Login</h1>
                <hr>
            </div>
            <div class="card-body">
            <div class="simple-login-container">
    <h2>Login Form</h2>
    <form method="post">
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="text" name="email" class="form-control" placeholder="Email" autocomplete="off">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="password" name="password" placeholder="Enter your Password" class="form-control" autocomplete="off">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="submit" name="adminlog-btn"  class="btn btn-block btn-login" placeholder="" autocomplete="off" >
        </div>
    </div>
</form>
</div>

            </div>
        </div>
        <p style="color: white;">Email: adminn@gmail.com<br> Password: admin12345</p>
    </div>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>