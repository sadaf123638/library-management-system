<?php
include 'connection.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>User Issue Page</title>

    <style>
        .tbl-fixed{
            overflow-x: scroll;
            overflow-y: scroll;
            width: 930px;
        }
    </style>
</head>
<body>
<?php
include 'homenav.php';

// Initialize variables
?>
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 mt-5 tbl-fixed">
            <table class="table-bordered" width="900px" style="text-align: center">
                <tr>
                    <th>Book Name</th>
                    <th>Book Price</th>
                    <th>Book ID</th>
                    <th>Issued Date</th>
                    <th>Return Date</th>
                    <th>Fine</th>
                    <th>Student ID</th>
                    <th>Student Name</th>
                </tr>
                
                <?php
                $id = $_SESSION['id']; // Ensure this is set correctly
                $query = "SELECT 
                b.bname, 
                b.bprice, 
                s.bookid, 
                s.issue_date, 
                s.return_date, 
                s.fine, 
                r.id AS student_id, 
                r.name AS student_name 
                FROM issuebook_db s 
                INNER JOIN add_book b ON s.bookid = b.id 
                INNER JOIN regdb r ON s.student_id = r.id 
                WHERE r.id = '$id'"; // Filter by logged-in student ID

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
                    <td><?php echo $row['student_name'];?></td> <!-- Updated key here -->
                </tr>
                <?php
                }
                ?>  
            </table>
        </div>
    </div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
