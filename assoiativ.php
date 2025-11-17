<?php
$students = array(
    "Arjun" => "A",
    "Chand" => "B+",
    "santosh" => "A-",
    "sandip" => "A",
    "sewa" => "B",
    "Darshan" => "A+",
    "Sujit" => "B+",
    "Kamal" => "A",
    "Samit" => "A-",
    "Himal" => "B"
);
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Student Name</th><th>Grade</th></tr>";

foreach ($students as $name => $grade) {
    echo "<tr><td>$name</td><td>$grade</td></tr>";
}

echo "</table>";
?>
