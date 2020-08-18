<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "h2_web";
$link = mysqli_connect($serverName, $userName, $password);
mysqli_select_db($link, $databaseName);

?>