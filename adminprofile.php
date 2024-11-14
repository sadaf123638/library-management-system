<?php
include 'connection.php';
?>
<?php
if(isset($_POST['update_btn']))
{ 
$update_id = $_POST['edit_id'];    
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

    
    $query_update = "UPDATE adminreg SET name='$name',  email='$email', password='$password' WHERE id='$update_id' ";
    
    $query_update_run = mysqli_query($conn, $query_update);
    
    if($query_update_run)
    {    
        header("location: adminedit.php");
    }
    else
    {    
        header("location: adminprofile.php");
    }
}

?>

<?php



if(isset($_SESSION['id'])) {
    $id = $_SESSION['id']; 
   
$register_query = "SELECT * FROM adminreg WHERE id='$id' ";
$register_query_run = mysqli_query($conn, $register_query);
if(mysqli_num_rows($register_query_run) > 0)
{    
 while($row = mysqli_fetch_array($register_query_run))
 {
   
     ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edid Profile</title>
  </head>
  <body>
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
                 <label>Name</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="<?php echo $row['name']; ?>">
                </div>
                   
                 <div class="form-group">
                 <label>Email address</label>
                 <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?php echo $row['email']; ?>">
                </div>
                 <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $row['password']; ?>">
                  </div>
                
                    <a href="adminedit.php" class="btn btn-danger">Cancel</a>
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
    } 
    else {
        // No data found for the given 'id'
        echo "No Data Found by this id";
    }


?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>