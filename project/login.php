<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.form-container {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.form-field {
  width: 60%;
}

.container {
  padding: 16px;

}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
 
}

input[type=text]:focus, input[type=password]:focus {
 
  outline: none;
}

hr {
 
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  width: 100%;
}

.registerbtn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<div class="form-container">
  <form action="/action_page.php" class="form-field">
    <fieldset class="container">
      <h1>Register</h1>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
      <button type="submit" class="registerbtn">Register</button>
    </fieldset>
  </form>
</div>

</body>
</html>