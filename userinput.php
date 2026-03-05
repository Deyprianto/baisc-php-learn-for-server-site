<?php 

echo "enter your gender and age ";
$gender = readline();
$age = (int)readline();


if($gender == "male" && $age >= 21 ) {
    echo "mahshallah biye dewa jabe ";
} else if ($gender == "female" && $age >= 18) {
    echo "mahshallah biye dewa jabe ";
} else {
    echo "biye dewa jabe na";
}

?>