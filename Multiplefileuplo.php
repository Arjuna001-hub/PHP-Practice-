<html>
<body>

<form method="post" action="" enctype="multipart/form-data">
    Select files: <input type="file" name="filename[]" multiple>
    <input type="submit" value="Upload">
</form>

<?php
if ($_FILES) {

    foreach ($_FILES['filename']['name'] as $key => $name) {

        $tmp = $_FILES['filename']['tmp_name'][$key];

        if ($tmp) {
            move_uploaded_file($tmp, $name);
            echo "Uploaded file '$name'<br>";
            echo "<img src='$name' width='150'><br><br>";
        }
    }
}
?>

</body>
</html>
