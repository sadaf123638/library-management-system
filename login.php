<?php
include 'connection.php';

if(isset($_POST["log-btn"])){
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $result = mysqli_query($conn, "SELECT * FROM regdb WHERE email = '$email' OR name = '$name'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($pass == $row["pass"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["name"] = $row["name"];
            header("location: home.php");

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

    <title>Library Management System Login</title>
    <style>
        body{
        background: #F8F8F8;
      }
         .container{
            background-color: skyblue;
            box-shadow: 0px 0px 10px white;
            margin-top: 60px;
           
        }
        h2{
            font-size: 35px;
            display:flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            margin-top: 10px;
        }
        h2 span{
            color: blue;
            margin-left: 2px;
        }
        
    </style>
  </head>
  <body>
  <?php include 'nav.php';?>

  <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 mt-5 mb-5">
                <div class="card">
                    <form method="post">
                        <div class="card-heading">
                            <h2>Log<span>In</span></h2>
                        </div>
                        <div class="card-body">
                      
                         <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Email or Name</label>
                         <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
                          </div>
                         <div class="mb-3">
                         <label for="exampleInputPassword1" class="form-label">Password</label>
                         <input type="password" name="pass" class="form-control" id="exampleInputPassword1" autocomplete="off">
                         </div>
                         <button type="submit" name="log-btn" class="btn btn-primary">Submit</button>
                         <a href="index.php">register</a>
                    
                        </div>
                    </form>
                </div>
            </div>
            <div class = "col-md-6 mt-5">
                <div class = "card">
                <img src="image/ll.jpg" style="height: 322px;">
               
                </div>
            </div>
    </div>
    </div>

            <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
