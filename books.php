<?php
include 'connection.php';

if(isset($_POST["add_book"])){
  $bid = $_POST["bid"];
  $bname = $_POST["bname"];
/*
  $baid = $_POST["baid"];
  $bcid = $_POST["bcid"];*/
  $bnum = $_POST["bnum"];
  $bprice = $_POST["bprice"];

  $query = "INSERT INTO add_book (bid, bname, bnum, bprice) VALUES ('$bid', '$bname', '$bnum', '$bprice')";
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

    <title>Books</title>
  </head>
  <body>
  <?php include 'dashnav.php';?>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mt-5"></div>
        <div class="col-md-4 mt-5">
          <h1 style="text-align:center;">Add a new Book</h1>
          <form method="post">
          <div class="mb-3">
    <label for="" class="form-label">Book ID:</label>
    <input type="text" name="bid" class="form-control" id=""  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Book Name:</label>
    <input type="text" name="bname" class="form-control" id="">
  </div>
  <!---
  <div class="mb-3">
    <label for="" class="form-label">Author ID:</label>
    <input type="text" name="baid" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Category ID:</label>
    <input type="text" name="bcid" class="form-control" id="">
  </div>-->
  <div class="mb-3">
    <label for="" class="form-label">Book Number:</label>
    <input type="text" name="bnum" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Book Price:</label>
    <input type="text" name="bprice" class="form-control" id="">
  </div>
  <button type="submit" name="add_book" class="btn btn-primary">Add BOOk</button>
  <!--<a href="managebook.php" class="btn btn-warning">Manage Book</a><--->
  <a href="dash.php" class="btn btn-secondary">Back</a>
          </form>
        </div>
        <div class="col-md-4 mt-5"></div>
      </div>
    </div>
   
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>