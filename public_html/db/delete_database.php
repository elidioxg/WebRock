<?php
header('Content-Type: text/html; charset=UTF-8');
include '../../resources/constants.php';

$user = Constants::getUser();
$local = Constants::getLocal();
$passwd = Constants::getPasswd();
$database = Constants::getDatabase();

$connection = mysqli_connect($local, $user, $password) or die(mysqli_error($connection));

$sql = "DROP DATABASE IF EXISTS $database";
mysqli_($connection, $sql) or die(mysqli_error($connection));

mysqli_close($connection);