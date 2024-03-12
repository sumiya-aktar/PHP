<?php

class Student {
    private $id;
    private $name;
    private $course;
    private $phone;
   
    private static $file_path = "auth.txt";


    public function __construct($_id, $_name, $_course, $_phone) {
        $this->id = $_id;
        $this->name = $_name;
        $this->course = $_course;
        $this->phone = $_phone;
    }

    public function toCsv() {
        return "{$this->id},{$this->name},{$this->course},{$this->phone}" . PHP_EOL;
    }


    public function save() {
        $students = file(self::$file_path);
        file_put_contents(self::$file_path, $this->toCsv(), FILE_APPEND);
    }

    
public static function display_students() {
  $students = file(self::$file_path);

  echo "<table border='2'>";
  echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>COURSE</th>
            <th>PHONE</th>
       </tr>";

  foreach ($students as $student) {
      list($id, $name, $course, $phone) = explode(",", trim($student, 0 ));
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


?>
