<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registerd User</title>
  </head>
  <body>
  <?php include 'dashnav.php';?>
  <div class="container">
          <div class="row">
              <div class="col-md-12 mt-5">
                  <div class="card">
                      <div class="card-header">
                          <h4>View User Register
                              <a href="dash.php" class="btn btn-primary float-right">Back</a>
                          </h4>
                          
                      </div>
                      <div class="card-body">
                          <?php
                          include 'connection.php';
                          $register = "SELECT * FROM regdb";
                          $register_run = mysqli_query($conn, $register);
                          if(mysqli_num_rows($register_run) >0)
                          {
                              ?>
                             
                                
                            
                          
                          
                      <table class="table table-bordered">
                       <thead>
                       <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Password</th>
                      <th scope="col">Contact</th>     
                      </tr>
                      </thead>
                      <tbody>
                          <?php
                         while($reg_row = mysqli_fetch_array($register_run))
                         { 
                         
                             ?>
                      <tr>
                      <th> <?php echo $reg_row['id']; ?></th>
                      <td> <?php echo $reg_row['name']; ?></td>
                      <td> <?php echo $reg_row['email']; ?></td>
                      <td> <?php echo $reg_row['pass']; ?></td>      
                      <td> <?php echo $reg_row['number']; ?></td>
                     
                          
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