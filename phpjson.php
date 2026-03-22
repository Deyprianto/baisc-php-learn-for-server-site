<?php
$data = array();

$user_info = array(
        "name" => "Jayanto",
        "mobile" => "016430294115",
        "email" => "jayantodey@gmail.com",
        "address" => "sylhet"

);
array_push($data,$user_info);

$user_info = array(
        "name" => "Prianto",
        "mobile" => "0164xxxxxx",
        "email" => "priantodey@gmail.com",
        "address" => "Dhaka"

);
array_push($data,$user_info);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);


?>
