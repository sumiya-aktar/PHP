<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_GET['fname'];

    ?>
    <form action ="<?php $_SERVER['PHP_SELF']?>"mathod="GET">
      <input type="text" name="fname">
      <input type="submit" value="submit">
    </form>
</body>
</html>