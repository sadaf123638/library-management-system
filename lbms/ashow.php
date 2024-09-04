<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Manage Author</title>
  </head>
  <body>
  <?php include 'dashnav.php';?> 
  <div class="container">
          <div class="row">
              <div class="col-md-12 mt-5">
                  <div class="card">
                      <div class="card-header">
                          <h4>Manage Author
                              <a href="author.php" class="btn btn-primary float-right">Add Author</a>
                          </h4>
                          
                      </div>
                      <div class="card-body">
                          <?php
                          include 'connection.php';


                          
                          if(isset($_POST['delete_btn']))
{
    $delete_id = $_POST['delete_id'];
    
    $reg_query = "DELETE FROM author WHERE id='$delete_id' ";
    $reg_query_run = mysqli_query($conn, $reg_query);
    
    if($reg_query_run)
    {
        header("location: ashow.php");
    }
    else{
        header("location: author.php");
    }
}
                          
                          $register = "SELECT * FROM author";
                          $register_run = mysqli_query($conn, $register);
                          if(mysqli_num_rows($register_run) >0)
                          {
                              ?>
                             
                                
                            
                          
                          
                      <table class="table table-bordered">
                       <thead>
                       <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Author ID</th>
                      <th scope="col">Author Name</th>
                      <th scope="col">Edit</th>  
                      <th scope="col">Delete</th>         
                      </tr>
                      </thead>
                      <tbody>
                          <?php
                         while($reg_row = mysqli_fetch_array($register_run))
                         { 
                         
                             ?>
                      <tr>
                      <td> <?php echo $reg_row['id']; ?></td>
                      <td> <?php echo $reg_row['aid']; ?></td>
                      <td> <?php echo $reg_row['aname']; ?></td>
                      <td>
                          <a href="aedit.php?id=<?php echo $reg_row['id']; ?>" class="btn btn-primary">Edit</a>
                      </td>
                           <td>
                          <form action="" method="post">
                          <input type="hidden" name="delete_id" value="<?php echo $reg_row['id']; ?> ">
                              <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>  
                          </form>
                      </td> 
                          
                       </tr>
                          <?php } ?>
                       </tbody>
                       </table>
                      
                      <?php
                          }
                          else
                          {
                              echo "No Record Found";
                          }
                          ?>
                      </div>
                  
                  </div>
              
              </div>
          
          
          </div>
      
      
      </div>


    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>