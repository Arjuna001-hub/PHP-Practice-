<html>
<body>

<form method="post" action="" enctype="multipart/form-data">
    Select: <input type="file" name="filename" size="10">
    <input type="submit" value="Upload">
</form>

<?php 
if ($_FILES) {
    $name = $_FILES['filename']['name'];
    $tmp  = $_FILES['filename']['tmp_name'];

    // Move uploaded file
    move_uploaded_file($tmp, $name);

    echo "Uploaded image '$name'<br>";
    echo "<img src='$name' width='200'>";
}
?>

</body>
</html>
