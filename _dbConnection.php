<?php
# Name of the Database and related items
// $serverName = "sql105.epizy.com";
// $userName = "epiz_28955004";
// $password = "9WntU2nuINigSDK";
// $DB = "epiz_28955004_Saazid";

$serverName = "localhost";  #sql105.epizy.com
$userName = "root"; #epiz_28955004
$password = ""; # 9WntU2nuINigSDK
$DB = "saazidgeneralstore"; #epiz_28955004_Saazid

# Sequence = Server name, user name, password, database name.
$conn = mysqli_connect($serverName, $userName, $password, $DB);

?>
