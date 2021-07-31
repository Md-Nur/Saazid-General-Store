<?php

header("Location: ./");


# Extracting the html file data
$name = $_POST['nm'];
$email = $_POST['em'];
$phone = $_POST['ph'];
$address = $_POST['ad'];
$comment = $_POST['txt'];


# connect to the server
include "_dbConnection.php";



if (!$conn) {
    die("Connection is unsucessful" . mysqli_connect_error());
} else {
    echo "Connection Sucessful!", "<br>";
}

$sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `address`, `comment`, `time`) VALUES ('$name', '$email','$phone', '$address', '$comment', current_timestamp());";

if (mysqli_query($conn, $sql)) {
    echo "Sucessfully collect your comment!", "<br>";
} else {
    echo "error" . mysqli_error($conn);
}
mysqli_close($conn);

exit;
