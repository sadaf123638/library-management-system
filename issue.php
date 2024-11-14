<?php
include 'connection.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Issue Book</title>
    <style>
        .tbl-fixed{
            overflow-x: scroll;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
<?php include 'dashnav.php';?>
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 mt-5 tbl-fixed">
            <table class="table table-bordered" width="900px" style="text-align: center;">
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
                    INNER JOIN regdb r ON s.student_id = r.id";

                $result = mysqli_query($conn, $query);

                if (!$result) {
                    die('Query failed: ' . mysqli_error($conn) . " SQL: " . $query);
                }

                // Debugging: Output the number of rows returned
               // echo "Rows returned: " . mysqli_num_rows($result) . "<br>";

                // Check if any rows are returned
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)){
                       // print_r($row); // Output each row
                ?>
                <tr>
                    <td><?php echo $row['bname'];?></td>
                    <td><?php echo $row['bprice'];?></td>
                    <td><?php echo $row['bookid'];?></td>
                    <td><?php echo $row['issue_date'];?></td>
                    <td><?php echo $row['return_date'];?></td>
                    <td><?php echo $row['fine'];?></td>
                    <td><?php echo $row['student_id'];?></td>
                    <td><?php echo $row['student_name'];?></td>
                </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='8'>No records found</td></tr>";
                }
                ?>  
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
