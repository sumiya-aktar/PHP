<?php
//Step 1:
class Student{   
   private $id;
   private $name;
   private $course;
   private $phone;  
   
   private static $file_path="data.txt"; 
   
   //---constructor---//
   function __construct($_id,$_name,$_course,$_phone){
	   $this->id=$_id;
	   $this->name=$_name;
	   $this->course=$_course;
	   $this->phone=$_phone;
   }
  
  //--csv function--//
   public function csv(){
	 return $this->id.",".$this->name.",".$this->course.",".$this->phone.PHP_EOL;   
   }
   
   //--save function--//
   public function save(){
	   
	       $students=file(self::$file_path);  	   
	  	
		   file_put_contents(self::$file_path,$this->csv(),FILE_APPEND);
	   	   
	   
   }//end save	
       
   
   //---display_students---//
   
   public static function display_students(){
	   
	    $students=file(self::$file_path);
		  echo "<table border='2'>";
  echo "<tr>
  <th>ID</th>
  <th>Name</th>
  <th>COURSE</th>
  <th>PHONE</th>
  </tr>";
	
		foreach($students as $student){
				   list($id,$name,$course,$phone)=explode(",",trim($student));
           echo "<tr>
           <td>$id</td>
           <td>$name</td>
           <td>$course</td>
           <td>$phone</td>
           </tr>";
          }
        
          echo "</table>";
        } 
				   
	    }
				
		
      
   
 //--end functions---   

// Student class

?>