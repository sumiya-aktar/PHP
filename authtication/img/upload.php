<?php
  echo "<pre>";
  print_r($_FILES);
  echo "</pre>";

  if(isset($_FILES['img'])){
    $file_name=$_FILES['img']['name'];
    $tmp_file = $_FILES['img']['tmp_name'];
    $img = "image/";
   move_uploaded_file($tmp_file,$img.$file_name);

  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="#" method="post" enctype="multipart/form-data">
       <div>Upload:
        <input type="file" name="img">
        <input type="submit" value="submit">
       </div>
     </form>
     <?php 
     if(isset($_FILES['img'])){
      echo "<img src = '$img/$file_name' width = '100px' hight ='50px'>";
     }
     
     
     ?>
</body>
</html>