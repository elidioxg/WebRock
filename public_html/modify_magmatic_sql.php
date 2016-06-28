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
$value11 = filter_input(INPUT_POST, 'field11');
$value12 = filter_input(INPUT_POST, 'field12');
$value13 = filter_input(INPUT_POST, 'field13');
$value14 = filter_input(INPUT_POST, 'field14');
$value15 = filter_input(INPUT_POST, 'field15');
$value16 = filter_input(INPUT_POST, 'field16');
$value17 = filter_input(INPUT_POST, 'field17');
$value18 = filter_input(INPUT_POST, 'field18');

$user= Constants::getUser();
$local = Constants::getLocal();
$passwd = Constants::getPasswd();
$database = Constants::getDatabase();
$table = Constants::getTableMag();

$name = Constants::getName();
$mineralogy = Constants::getMainMagmatic();
$secondary = Constants::getSecMagmatic();
$structure = Constants::getStructure();
$chrystal = Constants::getChryst();
$visibility = Constants::getVisibility();
$size = Constants::getSize();
$relative_size = Constants::getRelativeSize();
$geometry = Constants::getGeometry();
$articulation = Constants::getArticulation();
$framework = Constants::getFramework();
$acidity = Constants::getAcidity();
$saturation = Constants::getSaturation();
$feldspars = Constants::getFeldspars();
$color_index = Constants::getColorIndex();
$alumina = Constants::getAlumina();
$alkalinity = Constants::getAlkalinity();
$description = Constants::getDescription();

$connection = mysql_connect($local, $user, $passwd) or die(mysql_error());
mysql_select_db($database, $connection) or die(mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");

$sql = "SELECT * FROM $table WHERE $name = '$value1' ;";
$result = mysql_query($sql, $connection);

if (\mysql_num_rows($result) > 0) {
    
   $sql = "UPDATE $table SET $main='$value2' WHERE $name='$value1';";
   $result = mysql_query($sql, $connection) or die(mysql_error());
    
   echo "<script language='javascript' "
   . "type='text/javascript'>alert('Registro Modificado'); "
   . "window.location.href='index_metamorphic.php'</script>";                     
   } 
  mysql_close($connection);
