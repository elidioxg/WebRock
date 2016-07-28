<?php

$valueName = filter_input(INPUT_POST, 'met_rocks');

$user = Constants::getUser();
$local = Constants::getLocal();
$passwd = Constants::getPasswd();
$database = Constants::getDatabase();
$name = Constants::getName();
$table = Constants::getTableMet();

$connection = mysql_connect($local, $user, $passwd) or die (mysql_error());

mysql_select_db($database, $connection) or die( mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");
 
$sqlSelect = "SELECT $name FROM $table WHERE $name = '$valuename';";
$result = mysql_query($sqlSelect, $connection) or die(mysql_error());

if (mysql_num_rows($result) > 0) {
    $sqlDelete = "DELETE FROM $table WHERE $name ='$valueName';";
    mysql_query($sqlDelete, $connection) or die(mysql_error());
    echo"<script language='javascript' type='text/javascript'>alert('$valueName deleted'); window.location.href='/WebRocks/public_html/exclude.php'</script>";
} else {
    echo"<script language='javascript' type='text/javascript'>alert('Not possible to delete $valueName'); window.location.href='/WebRocks/public_html/exclude.php'</script>";
}
mysql_close($connection);
