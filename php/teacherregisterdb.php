<?php

include 'db.php';

$firstname =  $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email =  $_POST['email']; 
$college =  $_POST['college'];
$password =  $_POST['password'];


$sql = "INSERT INTO `teacher` (`id`, `firstname`, `lastname`, `email`, `college`, `password`)
VALUES (NULL, '$firstname', '$lastname', '$email','$college','$password')";


if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo '<script>alert("Login to continue")</script>';
    header('location: ../teacherlogin.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>