<?php
include 'connection.php';

// Initialize variables


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Issue Book</title>
</head>
<body>
<?php include 'dashnav.php';?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mt-5">
        <form>
            <table class="table-bordered" width="900px" style="text-align: center">
            <tr>
                    <th>Book Name</th>
                    <th>Book Price</th>
                    <th>Book ID</th>
                    <th>Issued Date</th>
                    <th>Return Date</th>
                    <th>Fine</th>
                    <th>Student Id</th>
                    <th>Student Name</th>
                </tr>
                
                <?php
                $query = "SELECT s.*, b.*, r.* FROM issuebookdb s 
                          INNER JOIN addbook b ON s.bookid = b.id
                          INNER JOIN regdb r ON s.student_id = r.id";
                $result = mysqli_query($conn, $query);
                
                if (!$result) {
                    die('Query failed: ' . mysqli_error($conn));
                }
                
                while ($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['bname'];?></td>
                    <td><?php echo $row['bprice'];?></td>
                    <td><?php echo $row['bookid'];?></td>
                    <td><?php echo $row['issue_date'];?></td>
                    <td><?php echo $row['return_date'];?></td>
                    <td><?php echo $row['fine'];?></td>
                    <td><?php echo $row['student_id'];?></td>
                    <td><?php echo $row['name'];?></td>

                </tr>

                <?php
                }
                ?>  
            </table>
        </form>
        </div>
    </div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
