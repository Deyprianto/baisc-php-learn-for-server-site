<?php
$con = mysqli_connect("localhost","appdevpr_prianto","","appdevpr_student_database");

if(!$con) {
    echo "not connected: " .mysqli_connect_errno();
}

$sql = "SELECT * FROM user_info";

$result = mysqli_query($con,$sql);
$data = array();

foreach($result as $item) {
    $name = $item["name"];
    $s_id = $item["s_id"];
    $cgpa = $item["cgpa"];
    $age = $item["age"];

    $user_info["name"] = $name;
    $user_info["s_id"] = $s_id;
    $user_info["cpga"] = $cgpa;
    $user_info["age"] = $age;
    
    }
    array_push($data,$user_info);

    json_encode($data);



?>
