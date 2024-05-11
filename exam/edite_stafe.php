<?php 
$conn = mysqli_connect('localhost','root','','exam');
if (isset($_GET['id'])) { 
    $getid = $_GET['id'];
    
    $sql = "SELECT * FROM users WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $getid);
    mysqli_stmt_execute($stmt);
    $query = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($query);




   
   $name = $data['name'];
   $Designation = $data['Designation'];
   $Designation = $_data['Designation']; 
   $ContactNumber = $data['ContactNumber'];
   $Email = $data['Email'];
   $address = $data['address']; 
  
  
}
if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $Designation = $_POST['Designation']; 
    $ContactNumber = $_POST['ContactNumber']; 
    $email = $_POST['Email'];
    $Address = $_POST['Address']; 
   

    $sql = "UPDATE users SET name='$name',
                             Designation='$designation',
                             ContactNumber='$contactNumber',
                             Email='$email',
                             Address='$address'
                             WHERE id = '$id'"; 


if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
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
        <div class="col-sm-3"></div>
        <div class="col-sm-6 pt-4 mt-4 border border-success"> 
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"> 
        Name:<br>
        <input type ="text" name ="name" value="<?php echo $name ?>"><br><br>
        Desingation:<br>
        <input type ="text" name ="Desingation" value="<?php echo $Desingation ?>"><br><br>
        Contact number:<br>
        <input type ="text" name ="Contact number" value="<?php echo $ContactNumber ?>"><br><br>
        Email:<br>
        <input type ="email" name ="email" value="<?php echo $email ?>"><br><br>
        Address:<br>
        <input type ="email" name ="Address" value="<?php echo $email ?>"><br><br>
        <input type ="text" name ="id" value =" <?php echo $id ?>" hidden><br><br>
        <input type ="submit" name ="edit" value="Edit" class="btn btn-success">
    </form>
    </div>
        <div class="col-sm-3"></div>
    </div>
   </div>
</body>
</html>