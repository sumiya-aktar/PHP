<?php 
$conn = mysqli_connect('localhost','root','','exam');
if (isset($_GET['deleteid'])){ 
    $deleteid = $_GET['deleteid'];

     $sql = "DELETE FROM  users WHERE id = $deleteid";
     if(mysqli_query($conn, $sql) == TRUE){ 
        header('location:stafe_list.php');
     }
}


?>

<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <p><a href="add_stafe.php">Add New Data</a></p>
        <div class="col-sm-1"></div>
        <div class="col-sm-10 pt-4 mt-4 border border-success">
            <h3 class="text-center p-2 m-2 bg-success text-white">User Information</h3>
            <?php
            

            $sql = 'SELECT * FROM users';
            $query = mysqli_query($conn, $sql);

            if (!$query) {
                echo "Error: " . mysqli_error($conn);
                exit;
            }

            echo "<table class='table table-success'>
                     <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                     </tr>";

            while ($row = mysqli_fetch_assoc($query)) {
                $id = $row['id']; 
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['designation'] . "</td>";
                echo "<td>" . $row['contact_number'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>
                        <span class='btn btn-success'><a href='edite_staff.php?id=$id' class='text-white text-decoration-none'>Edit</a></span>
                        <span class='btn btn-danger'><a href='staff_list.php?deleteid=$id' class='text-white text-decoration-none'>Delete</a></span>
                      </td>";
                echo "</tr>";
            }

            echo "</table>";

            mysqli_free_result($query);
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
 