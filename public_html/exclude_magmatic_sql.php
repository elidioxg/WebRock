<?php

$valueName = filter_input(INPUT_POST, 'rock_name');

$user = Constants::getUser();
$local = Constants::getLocal();
$passwd = Constants::getPasswd();
$database = Constants::getDatabase();
$name = Constants::getName();
$connection = mysql_connect($local, $user, $passwd) or print (mysql_error());

mysql_select_db($database, $connection) or print mysql_error();
mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");
        
$table = Constants::getTableMag();

$sqlSelect = "SELECT $name FROM $table WHERE $name = '$valuename';";
$result = mysql_query($sqlSelect, $connection);
if (mysql_num_rows($result) <= 1) {
    $sqlDelete = "DELETE FROM $table WHERE $name ='$valueName'";
    mysql_query($sqlDelete, $connection) or print(mysql_error());
    echo"<script language='javascript' type='text/javascript'>alert('$fieldName deleted'); window.location.href='./exclude.php'</script>";
} else {
    echo"<script language='javascript' type='text/javascript'>alert('Not possible to delete $fieldName'); window.location.href='./exclude.php'</script>";
}
mysql_close($connection);

