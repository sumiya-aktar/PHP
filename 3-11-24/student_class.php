<?php
// Step 1:
class Student{
   private $id;
   private $name;
   private $email;
   private $phone;

   // Constructor
   function __construct($_id, $_name, $_email, $_phone){
       $this->id = $_id;
       $this->name = $_name;
       $this->email = $_email;
       $this->phone = $_phone;
   }

   // CSV function
   public function csv(){
       return $this->id . "," . $this->name . "," . $this->email . "," . $this->phone . PHP_EOL;
   }

   // Save function
   public function save(){
       file_put_contents("data.txt", $this->csv(), FILE_APPEND);
   }

   // Display students
   public static function display_students(){
       $students = file("data.txt");
   
    echo "<table border='2'>";
    echo "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>email</th>
    <th>PHONE</th>
    </tr>";
       foreach($students as $student){
           list($id, $name, $email, $phone) = explode(",", trim($student));
       
        echo "<tr>
        <td>$id</td>
        <td>$name</td>
        <td>$email</td>
        <td>$phone</td>
        </tr>";
       }
     
       echo "</table>";
       }
   }


// End of Student class
?>
