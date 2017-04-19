<?php

include '../resources/constants.php';
$valueName = filter_input(INPUT_POST, 'fieldName');
$valueMain = filter_input(INPUT_POST, 'fieldMain');
$valueSec = filter_input(INPUT_POST, 'fieldSec');
$valueStruc = filter_input(INPUT_POST, 'fieldStruc');
$valueChr = filter_input(INPUT_POST, 'fieldChr');
$valueVis = filter_input(INPUT_POST, 'fieldVis');
$valueSize = filter_input(INPUT_POST, 'fieldSize');
$valueRel = filter_input(INPUT_POST, 'fieldRel');
$valueGeo = filter_input(INPUT_POST, 'fieldGeo');
$valueArt = filter_input(INPUT_POST, 'fieldArt');
$valueFram = filter_input(INPUT_POST, 'fieldFram');
$valueAcid = filter_input(INPUT_POST, 'fieldAcid');
$valueSat = filter_input(INPUT_POST, 'fieldSat');
$valueFel = filter_input(INPUT_POST, 'fieldFel');
$valueColor = filter_input(INPUT_POST, 'fieldColor');
$valueAlumina = filter_input(INPUT_POST, 'fieldAlumina');
$valueAlk = filter_input(INPUT_POST, 'fieldAlk');
$valueDes = filter_input(INPUT_POST, 'fieldDes');

$user = Constants::getUser();
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
if (\mysql_num_rows($result) <= 0) {
    $sql = "INSERT INTO $table ($name, $mineralogy, $secondary, $structure," .
            "$chrystal, $visibility, $size, $relative_size, $geometry, " .
            "$articulation, $framework, $acidity, $saturation, $feldspars," .
            "$color_index, $alumina, $alkalinity, $description) VALUES ('" .
            "$valueName', '$valueMain', '$valueSec', '$valueStruc', '$valueChr', '$valueVis'," .
            "'$valueSize', '$valueRel', '$valueGeo', '$valueArt'," .
            "'$valueFram', '$valueAcid', '$valueSat', '$valueFel', '$valueColor'," .
            "'$valueAlumina', '$valueAlk', '$valueDes');";
    $result = mysql_query($sql, $connection) or die(mysql_error());
    echo "<script language='javascript' type='text/javascript'>"
    . "alert('Registro adicionado'); window.location.href='index_magmatic.php'</script>";
} else {
    echo"<script language='javascript' type='text/javascript'>"
    . "alert('Esta especie ja existe'); window.location.href='add_magmatic.php'</script>";
}