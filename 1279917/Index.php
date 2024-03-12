<?php
//Step 2:
require_once("student_class.php");

if(isset($_POST["btnSubmit"])){
	
	$id=$_POST["txtId"];
	$name=$_POST["txtName"];
	$batch=$_POST["txtBatch"];
	$phone=$_POST["txtPhone"];	
	
	if(preg_match("/^[0-9+]{11,14}$/",$phone)){		
   
		$student=new Student($id,$name,$batch,$phone); 	
		$student->save();
		echo "Success!";
	
    }else{
	   echo "Invalid Phone";	 
    }
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form</title>
</head>

<body>

<form action="#" method="post">
<div>
ID:<br/>
<input type="text" name="txtId" />
</div>

<div>
Name<br/>
<input type="text" name="txtName" />
</div>

<div>
Batch<br/>
<input type="text" name="txtCourse" />
</div>

<div>
Phone<br/>
<input type="text" name="txtPhone" />
</div>

<div>
<input type="submit" name="btnSubmit" value="Submit" />
</div>
</form>
<?php
 Student::display_students();
?>
</body>
</html>