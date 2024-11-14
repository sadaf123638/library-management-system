<?php

include 'connection.php';

if(isset($_POST["reg-btn"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $number = $_POST["number"];
    
    $dublicate = mysqli_query($conn, "SELECT * From regdb WHERE email = '$email' OR name = '$name'");
   
    if(mysqli_num_rows($dublicate)){
        echo 
        "<script>
        alert('Email or name has already taken');
        </script>";
        
    }
    
    else{
        if($pass == $cpass){
          $query = "INSERT INTO regdb (name, email, pass, number) VALUES ('$name', '$email', '$pass', '$number')";
          $query_run = mysqli_query($conn, $query);
          echo 
          "<script>
          alert('Registraion Successfully');
          window.location.href= 'login.php';
          </script>";
        }
        else{
            echo 
            "<script>
            alert('Password or Confirm Password does not match');
            </script>"; 
        }
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

    <title>Library Management System Register</title>
    <style>
        body{
        background: #F8F8F8;
      }
        .container{
            background-color: grey;
            margin-top: 10px;
            margin-bottom: 5px;
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
 
            <div class = "container">
                <div class = row>
            <div class="col-md-6 mt-3 mb-3">
                <div class="card">
                    <form method="post" autocomplete="off">
                        <div class="card-heading">
                            <h2>Reg<span>ister</span></h2>
                        </div>
                        <div class="card-body">
                        <div class="mb-3">
                         <label for="exampleInputName" class="form-label">Name</label>
                         <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="emailHelp" autocomplete="off">
                          </div>
                         <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Email address</label>
                         <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
                          </div>
                         <div class="mb-3">
                         <label for="exampleInputPassword1" class="form-label">Password</label>
                         <input type="password" class="form-control" name="pass" id="exampleInputPassword1" autocomplete="off">
                         </div>
                         <div class="mb-3">
                         <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                         <input type="password" class="form-control" name="cpass" id="exampleInputPassword1" autocomplete="off">
                         </div>
                        
                         <div class="mb-3">
                         <label for="exampleInputContact" class="form-label">Contact</label>
                         <input type="tel" class="form-control" name="number" id="exampleInputContact" aria-describedby="emailHelp" autocomplete="off">
                          </div>
                         <button type="submit" name="reg-btn" class="btn btn-primary">Submit</button>
                         <a href="login.php">Login</a>
                    
                        </div>
                    </form>
                </div>
            </div>
            <div class = "col-md-6 mt-3 mb-3">
                <div class = "card">
                
                    <img src="image/kk.jpg" style = "height: 580px;">
               
                </div>
            </div>
 

        </div>
    </div>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>