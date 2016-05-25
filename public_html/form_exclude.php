<?php

include '../resources/constants.php';
header('Content-Type: text/html; charset=UTF-8');
mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");
$user = Constants::getUser();
$local = Constants::getLocal();
$passwd = Constants::getPasswd();
$database = Constants::getDatabase();
$type = $_SESSION['rock_type'];
switch($type){
    case "metamorphic":
        $table = Constants::getTableMet();
        break;
    case "magmatic":
        $table = Constants::getTableMag();
        break;
    default:
        die('Error. Contact admin');
        break;
}
$table = Constants::getTableMag();

$name = Constants::getName();
$connection = mysql_connect($local, $user, $passwd) or print(mysql_error());
mysql_select_db($database, $connection) or print mysql_error();
$sql = "SELECT $name FROM $table ORDER BY $name ASC;";
$result = mysql_query($sql, $connection) or die(mysql_error());

echo "<form method='POST' action='exclude_data.php'>";
echo "<select name='rock_name'>";
while ($results = mysql_fetch_array($result)) {
    echo "<option value='".$results[$name]."'>".$results[$name]."</option>";
}
echo "</select>";
echo "<input type='submit' value='Delete Selected' name='exclude>' >";
echo "</form>";
mysql_close($connection);