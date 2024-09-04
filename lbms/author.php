<?php
include 'connection.php';

if(isset($_POST["authbtn"])){
    $aid = $_POST["aid"];
    $aname = $_POST["aname"];

    $query = "INSERT INTO author (aid, aname) VALUES ('$aid', '$aname')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        echo "data inserted";
    }
    else{
        echo "Data Not Inserted";
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

    <title>Author</title>
  </head>
  <body>
  <?php include 'dashnav.php';?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-5"></div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 style="text-align: center;">Add Author</h1>
                        <form method="post">
  <div class="mb-3">
    <label for="" class="form-label">Author ID:</label>
    <input type="text" name="aid" class="form-control" id="" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Author Name:</label>
    <input type="text" name="aname" class="form-control" id="">
</div>
  <button type="submit" name="authbtn" class="btn btn-primary">Submit</button>
  <!--<a href="ashow.php" class="btn btn-warning">Manage Author</a><--->
</form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5"></div>
        </div>
    </div>

   
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>