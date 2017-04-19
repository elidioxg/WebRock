<?php

include "../resources/constants.php";

$valueName = filter_input(INPUT_POST, 'mag_rock');
echo $valueName;
$user = Constants::getUser();
$local = Constants::getLocal();
$passwd = Constants::getPasswd();
$database = Constants::getDatabase();
$name = Constants::getName();
$table = Constants::getTableMag();

$connection = mysqli_connect($local, $user, $passwd) or die(mysqli_connect_error($connection));

mysqli_select_db($connection, $database) or die(mysqli_error($connection));
mysqli_query("SET NAMES 'utf8'");
mysqli_query("SET character_set_connection=utf8");
mysqli_query("SET character_set_client=utf8");
mysqli_query("SET character_set_results=utf8");

$sqlSelect = 'SELECT '.$name.' FROM '.$table.' WHERE '.$name.' = "'.$valueName.'"';

$result = mysqli_query($connection, $sqlSelect) or die(mysqli_error($connection));
if (mysqli_num_rows($result) > 0 ) {
    $sqlDelete = 'DELETE FROM '.$table.' WHERE '.$name.' ="'.$valueName.'"';
    mysqli_query($connection, $sqlDelete ) or die(mysqli_error());
    echo"<script language='javascript' type='text/javascript'>alert('$valueName deleted'); window.location.href='./exclude_magmatic.php'</script>";
} else {
    echo"<script language='javascript' type='text/javascript'>alert('Not possible to delete $valueName'); window.location.href='./exclude_magmatic.php'</script>";
}
mysqli_close($connection);

