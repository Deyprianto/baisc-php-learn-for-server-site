<?php

 $con = mysqli_connect("localhost","appdevpr_prianto","joybangla1@A","appdevpr_my_database");

 if(mysqli_connect_errno()) {
    echo "database error occurs<br>". mysqli_connect_errno();
 } else {
    echo "database connected successfully";
 }

 $sql = "INSERT INTO user_table(name,mobile,email,address) VALUES('Anik','016xx','anikroy@gmail.com','sunamgonj')";
 $chk = mysqli_query($con,$sql);

 if($chk) {
   echo  "data added";
 } else {
   echo  "data not added";
 }

?>
