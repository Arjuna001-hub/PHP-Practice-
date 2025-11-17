<!DOCTYPE html>
<html>
<head>
<title>Form</title>
</head>
<body>

<form method="post">
  Name: <input type="text" name="name"><br><br>
  Email: <input type="email" name="email"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];

  echo "<h3>Form Submitted</h3>";
  echo "Name: $name <br>";
  echo "Email: $email";
}
?>
</body>
</html>
