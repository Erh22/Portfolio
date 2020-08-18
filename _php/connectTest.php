<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "guesttest0611";
$link = mysqli_connect($serverName, $userName, $password);
mysqli_select_db($link, $databaseName);

?>