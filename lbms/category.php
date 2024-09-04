<?php
include 'connection.php';

if(isset($_POST["cbtn"])){
  $cname = $_POST["cname"];
 

  $query = "INSERT INTO categorydb (cname) VALUES ('$cname')";
  $query_run = mysqli_query($conn, $query);

  if($query_run){
    echo "Data Inserted";
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

    <title>Category</title>
    <style>
       
    </style>
  </head>
  <body>
  <?php include 'dashnav.php';?>
    <div class="container">
        <div class="row">
          <div class="col-md-4 mt-4"></div>
            <div class=" col-md-4 mt-5">
                <div class="card">
                  
                        <h1 style="text-align: center;">Add Category</h1>
                        <div class="card-body">
                        <form method="post">
  <div class="mb-3">
    <label for="" class="form-label">Category Name:</label>
    <input type="text" class="form-control" name="cname" id="" aria-describedby="emailHelp">
   
  </div>
 
  <button type="submit" name="cbtn" class="btn btn-primary">Submit</button>
  <!---<a href="managecat.php" class="btn btn-warning">Manage Category</a><---->
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