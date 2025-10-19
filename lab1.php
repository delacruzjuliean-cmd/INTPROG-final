<?php
header('Content-Type: application/json');

$students = array(
    array("Name" => "Juliean", "Age" => 20, "Course" => "Information Technology"),
    array("Name" => "Bryan", "Age" => 22, "Course" => "Information Technology"),
    array("Name" => "Elysa", "Age" => 21, "Course" => "Information Technology")
);

// Convert to pretty JSON
$json = json_encode($students, JSON_PRETTY_PRINT);

// Output formatted JSON
echo $json;
?>

*[Exercise 1 - HTML/CSS](https://drive.google.com/drive/home);

