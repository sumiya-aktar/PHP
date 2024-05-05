
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
           
        }

        form {
            width: 400px;
            height: 630px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        .radio-group, .checkbox-group {
            display: flex;
            flex-direction: row;
            gap: 20px;
            margin-bottom: 12px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-top: 8px;
        }
    </style>
</head>
<body>

<form id="registrationForm">
    <h2 class="title">Create a new account</h2>
    <hr>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="John Doe" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="john.doe@example.com" required>
    <div id="emailError" class="error"></div>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>
    <div id="passwordError" class="error"></div>

    <label for="passwordConfirmation">Confirm Password:</label>
    <input type="password" id="passwordConfirmation" name="passwordConfirmation" placeholder="Enter your password" required>
    <br>
    <br>
    <button type="button" onclick="openDynamicWindow()" style="margin-left: 287px;">Create Account</button>
    <!-- <div id="errorMessages" class="error"></div -->
    

    

</form>
<?php
   
   class User {
       public $name;
      
     
       public $email;
       public $password;
       public $passwordConfirmation;
       public $errors = [];
   
       public function __construct($name, $email, $password, $passwordConfirmation) {
           $this->name = $name;

           $this->email = $email;
           $this->password = $password;
           $this->passwordConfirmation = $passwordConfirmation;
       }
   
       public function validate() {
           // Example validation rules
           if (empty($this->name)) {
               $this->errors[] = "Name is required.";
           }
           if (empty($this->email) || !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
               $this->errors[] = "Valid email is required.";
           }
           if (empty($this->password) || strlen($this->password) < 6) {
               $this->errors[] = "Password must be at least 6 characters long.";
           }
           if ($this->password !== $this->passwordConfirmation) {
               $this->errors[] = "Passwords do not match.";
           }
           // Add more validation rules as needed
       }
   
       public function register() {
           $this->validate();
           if (empty($this->errors)) {
               // Insert user data into the database
               // Example: assuming you have a database connection stored in $conn
               // $sql = "INSERT INTO users (name, address, gender, course, email, password) VALUES (?, ?, ?, ?, ?, ?)";
               // $stmt = $conn->prepare($sql);
               // $stmt->bind_param("ssssss", $this->name, $this->address, $this->gender, $this->course, $this->email, $this->password);
               // $stmt->execute();
               // $stmt->close();
               // Close database connection
               // $conn->close();
   
               // Return true or some success message
               return true;
           } else {
               // Return false or error messages
               return false;
           }
       }
   }
   
   // Example usage
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Assuming form fields are submitted via POST method
       $name = $_POST["name"];
       $address = $_POST["address"];
      
       $email = $_POST["email"];
       $password = $_POST["password"];
       $passwordConfirmation = $_POST["passwordConfirmation"];
   
       $user = new User($name,  $email, $password, $passwordConfirmation);
       if ($user->register()) {
           // Registration successful
           echo "Registration successful.";
       } else {
           // Registration failed, display errors
           foreach ($user->errors as $error) {
               echo $error . "<br>";
           }
       }
   }
   ?> 
</body>
</html>
        
