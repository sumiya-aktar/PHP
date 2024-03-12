<?php 
 session_start();

 if(!isset($_SESSION["sname"])){
	 header("location:login.php");
  }
//step 2:
require_once("student_class.php");

if(isset($_POST["btnSubmit"])){
	$id=$_POST["txtId"];
	$name=$_POST["txtName"];
	$email=$_POST["course"];
	$phone=$_POST["txtPhone"];
	
	if(!preg_match("/^[0-9+]{11,14}$/",$phone)){
		
		echo "Phone is not valid";
		
	}
    // elseif(!preg_match("/^[a-zA-Z0-9]{4,}[@][a-zA-Z]{4,6}[.][a-zA-Z]{2,3}$/",$email)){
		
	// 	echo "Email is not valid";
		
	// }
    else{
		$student=new Student($id,$name,$course,$phone);
		$student->save();
		echo "Sucess !";
		
	}
	
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
    
</head>
<body>

<fieldset>
    <legend><h2>Student Information Form</h2></legend>
    <form action="#" method="post">
        <div>
            ID:<br/>
            <input type="text" name="txtId"/>
        </div>

        <div>
            Name<br/>
            <input type="text" name="txtName"/>
        </div>

        <div>
            Course<br/>
            <input type="text" name="txtCourse"/>
        </div>

        <div>
            Phone<br/>
            <input type="text" name="txtPhone"/>
        </div>

        <div>
            <input type="submit" name="btnSubmit" value="Submit"/>
        </div>
    </form>
</fieldset>

<?php
Student::display_students();
?>

</body>
</html>


