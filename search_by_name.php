<?php
$con = mysqli_connect("localhost", "faaaaaa", "faaaa", "appdevpr_student_database");

$name = $_POST["name"];

$sql = "SELECT * FROM user_table WHERE name like '%$name%'";

if(mysqli_query($con,$sql)) {
    echo "searched";
} else echo "not works";

?>
