<?php
$con = mysqli_connect("localhost","appdevpr_prianto","sorry password share kora jabe na","appdevpr_new_database");

if(!$con) {
    echo "connction failed".mysqli_connect_error();
}

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];



$sql = "INSERT INTO tbl_user(name,mobile,email,address) VALUES('$name','$mobile','$email','$address')";

$result = mysqli_query($con,$sql);

if($result) {
     echo "inserted successfully";
} else {
    mysqli_error($con);
}




?>
