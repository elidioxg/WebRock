<?php
include '../resources/constants.php';
$value1 = filter_input(INPUT_GET, 'field1', FILTER_REQUIRE_ARRAY);
$value2 = filter_input(INPUT_GET, 'field2');
$value3 = filter_input_array(INPUT_GET, 'field3');
$value4 = filter_input_array(INPUT_GET, 'field4');
$value5 = filter_input_array(INPUT_GET, 'field5');
$value6 = filter_input_array(INPUT_GET, 'field6');
$value7 = filter_input_array(INPUT_GET, 'field7');
$value8 = filter_input_array(INPUT_GET, 'field8');
$value9 = filter_input_array(INPUT_GET, 'field9');
$value10 = filter_input_array(INPUT_GET, 'field10');

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

$connection = mysql_connect($local, $user, $passwd) or print(mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");
$sql = "SELECT * FROM $table WHERE $name = '$field1'";
$result = mysql_query($sql, $connection);
if($result == null){
    $sql = "INSERT INTO $table ($name, $main, $sec, $composition,"
            . "$structure, $texture, $metamorphism, $facies, $protolith,"
            . "$description ) VALUES ('$field1', '$field2', '$field3',"
            . "'$field4', '$field5', '$field6', '$field7', '$field8',"
            . "'$field9', '$field10');";
   $result = mysql_query($sql, $connection) or print mysql_error();
   echo "<script language='javascript' "
   . "type='text/javascript'>alert('Registro adicionado'); "
   . "window.location.href=''</script>";                     
   } else {
       echo "<script language='javascript' "
       . "type='text/javascript'>alert('Este registro ja existe');"
               . " window.location.href=''</script>";
   }
  