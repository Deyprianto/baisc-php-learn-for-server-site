<?php
$con = mysqli_connect("localhost","appdevpr_prianto","joybangla1@A","appdevpr_my_database");

$sql = "SElECT * FROM user_table ";
$result = mysqli_query($con,$sql);

$row = mysqli_num_rows($result);

echo "total row : ".$row."<br><br>";

foreach($result as $item) {
    $id = $item['id'];
    $name = $item['name'];
    $mobile = $item['mobile'];
    $email  = $item['email'];
    $address = $item['address'];

    echo "id : ".$id." ,name : ".$name." , mobile : ".$mobile." , email : ".$email." , address : ".$address."<br><br>";
}
?>
