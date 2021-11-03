<?php


require('config.php');


extract($_POST);


$sql = "INSERT into contact (name,email,subject,message,created_date) VALUES('" . $name . "','" . $email . "','" . $subject . "','" . $message . "','" . date('Y-m-d') . "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Something Wrong Happened!!".$mysqli->error);
}


echo "Thank You For Your Information!!";


$conn->close();


?>