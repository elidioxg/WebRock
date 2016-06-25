<?php
include '../resources/constants.php';
$value1 = filter_input(INPUT_POST, 'field1');
$value2 = filter_input(INPUT_POST, 'field2');
$value3 = filter_input(INPUT_POST, 'field3');
$value4 = filter_input(INPUT_POST, 'field4');
$value5 = filter_input(INPUT_POST, 'field5');
$value6 = filter_input(INPUT_POST, 'field6');
$value7 = filter_input(INPUT_POST, 'field7');
$value8 = filter_input(INPUT_POST, 'field8');
$value9 = filter_input(INPUT_POST, 'field9');
$value10 = filter_input(INPUT_POST, 'field10');

$user= Constants::getUser();
$local = Constants::getLocal();
$passwd = Constants::getPasswd();
$database = Constants::getDatabase();
$table = Constants::getTableMet();

$name = Constants::getName();
$main = Constants::getMainMetamorphic();
$sec = Constants::getSecMetamorphic();
$composition = Constants::getComposition();
$structure = Constants::getStructure();
$texture = Constants::getTexture();
$metamorphism = Constants::getMetamorphism();
$facies = Constants::getFacies();
$protolith = Constants::getProtolith();
$description = Constants::getDescription();

$connection = mysql_connect($local, $user, $passwd) or die(mysql_error());
mysql_select_db($database, $connection) or die(mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");
$sql = "SELECT * FROM $table WHERE $name = '$value1' ;";
$result = mysql_query($sql, $connection);
if (\mysql_num_rows($result) <= 0) {
    $sql = "INSERT INTO $table ($name, $main, $sec, $composition,"
            . "$structure, $texture, $metamorphism, $facies, $protolith,"
            . "$description ) VALUES ('$value1', '$value2', '$value3',"
            . "'$value4', '$value5', '$value6', '$value7', '$value8',"
            . "'$value9', '$value10');";
   $result = mysql_query($sql, $connection) or print mysql_error();
   echo "<script language='javascript' "
   . "type='text/javascript'>alert('Registro adicionado'); "
   . "window.location.href='index_metamorphic.php'</script>";                     
   } else {
       echo "<script language='javascript' "
       . "type='text/javascript'>alert('Este registro ja existe');"
               . " window.location.href='add_metamorphic.php'</script>";
   }
  