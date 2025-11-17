<?php
//Create an indexed array $subjects and display all elements using a loop.

$subjects = ["Linear albebra", "OOAD", "IT-II", "DBMS", "principle of management"
];

echo "Subjects:<br>";
foreach ($subjects as $subject) {
    echo $subject . "<br>";
}
?>