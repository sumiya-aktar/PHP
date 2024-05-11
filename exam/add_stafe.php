<?php 
$conn = mysqli_connect('localhost', 'root', '', 'exam');

if (isset($_POST['submit'])) { 
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $address = $_POST['address']; // Removed extra space from the name
    // Using prepared statements to prevent SQL injection
    $sql = "INSERT INTO users (name, designation, contact_number, email, address) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sssss', $name, $designation, $contact_number, $email, $address);
    if(mysqli_stmt_execute($stmt)) { 
        echo "DATA INSERTED";
        // Redirect to stafe_list.php after successful insertion
        header('location:stafe_list.php');
        exit(); // Ensure script stops execution after redirection
    } else { 
        echo "not inserted";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
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
        <div class="col-sm-3"></div>
        <a href="stafe_list.php">stafe_list</a>
        <div class="col-sm-6 pt-4 mt-4 border border-success"> 
            <form action="insert.php" method="POST"> 
                Name:<br>
                <input type="text" name="name"><br><br>
                Designation:<br>
                <input type="text" name="designation"><br><br>
                Contact number:<br>
                <input type="text" name="contact_number"><br><br>
                Email:<br>
                <input type="email" name="email"><br><br>
                Address:<br>
                <input type="text" name="address"><br><br>
                <input type="submit" name="submit" value="Add member" class="btn btn-success">
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
   </div>
</body>
</html>
