<?php
include '../resources/constants.php';
$value1 = filter_input(INPUT_GET, 'field1', FILTER_REQUIRE_ARRAY);
$value2 = filter_input_array(INPUT_GET, 'field2');
$value3 = filter_input_array(INPUT_GET, 'field3');
$value4 = filter_input_array(INPUT_GET, 'field4');
$value5 = filter_input_array(INPUT_GET, 'field5');
$value6 = filter_input_array(INPUT_GET, 'field6');
$value7 = filter_input_array(INPUT_GET, 'field7');
$value8 = filter_input_array(INPUT_GET, 'field8');
$value9 = filter_input_array(INPUT_GET, 'field9');
$value10 = filter_input_array(INPUT_GET, 'field10');
$value11 = filter_input_array(INPUT_GET, 'field11');
$value12 = filter_input_array(INPUT_GET, 'field12');
$value13 = filter_input_array(INPUT_GET, 'field13');
$value14 = filter_input_array(INPUT_GET, 'field14');
$value15 = filter_input_array(INPUT_GET, 'field15');
$value16 = filter_input_array(INPUT_GET, 'field16');
$value17 = filter_input_array(INPUT_GET, 'field17');
$value18 = filter_input_array(INPUT_GET, 'field18');

$user  = Constants::getUser();
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

$connection = mysql_connect($local, $user, $passwd) or print(mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");
$sql = "SELECT * FROM $table WHERE $name = '$field1' ;";
$result = mysql_query($sql, $connection);
if($result == null){
    $sql = "INSERT INTO $table ($name, $mineralogy, $secondary, $structure,".
            "$chrystal, $visibility, $size, $relative_size, $geometry, ".
            "$articulation, $framework, $acidity, $saturation, $feldspars,".
            "$color_index, $alumina, $alkalinity, $description) VALUES ('".
            "$field1', '$field2', '$field3', '$field4', '$field5', '$field6',".
            "'$field7', '$field8', '$field9', '$field9',  '$field10',".
            "'$field11', '$field12', '$field13', '$field14', '$field15',".
            "'$field16', '$field17', '$field18');";
    $result = mysql_query($sql, $connection) or print(mysql_error());  
    echo "<script language='javascript' type='text/javascript'>"
    . "alert('Registro adicionado'); window.location.href=''</script>";                     
} else {
    echo"<script language='javascript' type='text/javascript'>"
    . "alert('Esta especie ja existe'); window.location.href='add_sp.php'</script>";
}