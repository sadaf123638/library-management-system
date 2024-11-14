
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Manage Edit Book</title>
  </head>
  <body>
  <?php include 'dashnav.php';?>
  <?php
include 'connection.php';

if(isset($_POST['update_btn']))
{ 
$update_id = $_POST['edit_id'];    
$bid = $_POST['bid'];
$bname = $_POST['bname'];
/*$baid = $_POST['baid'];
$bcid = $_POST['bcid'];*/
$bnum = $_POST['bnum'];
$bprice = $_POST['bprice'];
    
    $query_update = "UPDATE add_book SET bid='$bid', bname='$bname',  bnum='$bnum', bprice='$bprice' WHERE id='$update_id' ";
    
    $query_update_run = mysqli_query($conn, $query_update);
    
    if($query_update_run)
    {    
        header("location: managebook.php");
    }
    else
    {    
        header("location: managebook.php");
    }
}



$id = $_GET['id'];    
$register_query = "SELECT * FROM add_book WHERE id='$id' ";
$register_query_run = mysqli_query($conn, $register_query);
if(mysqli_num_rows($register_query_run) > 0)
{    
 while($row = mysqli_fetch_array($register_query_run))
 {
   
     ?>
 

<div class="container">
    <div class="row">
        <div class="col-md-10 mt-3">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Page</h1>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    
                    <input type="hidden" name="edit_id" class="form-control" value="<?php echo $row['id']; ?>">
                    
                 <div class="form-group">
                 <label>Book ID:</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" name="bid" aria-describedby="emailHelp" value="<?php echo $row['bid']; ?>">
                </div>
                <div class="form-group">
                 <label>Book Name:</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" name="bname" aria-describedby="emailHelp" value="<?php echo $row['bname']; ?>">
                </div>    
                <!--
                 <div class="form-group">
                 <label>Author ID:</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" name="baid" aria-describedby="emailHelp" value="<?php echo $row['baid']; ?>">
                </div>
                 <div class="form-group">
                 <label>Category ID:</label>
                 <input type="text" class="form-control" id="exampleInputPassword1" name="bcid" value="<?php echo $row['bcid']; ?>">
                  </div>-->
                 <div class="form-group">
                 <label>Book Number:</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" name="bnum" aria-describedby="emailHelp" value="<?php echo $row['bnum']; ?>">
                </div>
                <div class="form-group">
                 <label>Book Price</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" name="bprice" aria-describedby="emailHelp" value="<?php echo $row['bprice']; ?>">
                </div>
                    <a href="managebook.php" class="btn btn-danger">Cancel</a>
                   <button type="submit" class="btn btn-primary" name="update_btn">Update</button>
                   </form>
                  </div>
                </div>
                </div>
               </div>
               </div>
<?php
 }
}
else
{
    echo "No Data Found by this id";
}
?>

    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>