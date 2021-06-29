<?php
# Extracting the html file data
$name = $_POST['nm'];
$email = $_POST['em'];
$phone = $_POST['ph'];
$address = $_POST['ad'];
$comment = $_POST['txt'];

# Name of the Database and related items
$serverName = "sql105.epizy.com";
$userName = "epiz_28955004";
$password = "9WntU2nuINigSDK";
$DB = "epiz_28955004_Saazid";

// $serverName = "localhost";  #sql105.epizy.com
// $userName = "root"; #epiz_28955004
// $password = ""; # 9WntU2nuINigSDK
// $DB = "saazidgeneralstore"; #epiz_28955004_Saazid

# connect to the server
# Sequence = Server name, user name, password, database name.
$conn = mysqli_connect($serverName, $userName, $password, $DB);

if (!$conn) {
    die("Connection is unsucessful" . mysqli_connect_error());
} else {
    echo "Connection Sucessful!", "<br>";
}

$sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `address`, `comment`) VALUES ('$name', '$email','$phone', '$address', '$comment');";

if (mysqli_query($conn, $sql)) {
    echo "Sucessfully collect your comment!", "<br>";
} else {
    echo "error" . mysqli_error($conn);
}
mysqli_close($conn)

?>

<br>