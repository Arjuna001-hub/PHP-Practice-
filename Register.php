<?php
$name = $email = $password = $about = "";
$nameErr = $emailErr = $passErr = $aboutErr = "";
$success = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }


    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }


    if (empty($_POST["password"])) {
        $passErr = "Password is required";
    } else {
        $password = htmlspecialchars($_POST["password"]);
    }

    if (empty($_POST["about"])) {
        $aboutErr = "This field is required";
    } else {
        $about = htmlspecialchars($_POST["about"]);
    }

    if (!$nameErr && !$emailErr && !$passErr && !$aboutErr) {
        $success = "Registration Successful!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<!-- Success Message -->
<?php if ($success) echo "<p style='color:green;'>$success</p>"; ?>
<form method="POST">
    Name: <br>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <div style="color:red;"><?php echo $nameErr; ?></div>
    <br>
    Email: <br>
    <input type="email" name="email" value="<?php echo $email; ?>">
    <div style="color:red;"><?php echo $emailErr; ?></div>
    <br>
    Password: <br>
    <input type="password" name="password">
    <div style="color:red;"><?php echo $passErr; ?></div>
    <br>
    About YouSelf: <br>
    <textarea name="about"><?php echo $about; ?></textarea>
    <div style="color:red;"><?php echo $aboutErr; ?></div>
    <br>
    <input type="submit" value="Register">
</form>
</body>
</html>
