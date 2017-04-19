<?php
header('Content-Type: text/html; charset=UTF-8');

include '../../resources/constants.php';

$user = Constants::getUser();
$local = Constants::getLocal();
$passwd = Constants::getPasswd();

$database = Constants::getDatabase();

$name = Constants::getName();
$description = Constants::getDescription();
$structure = Constants::getStructure();

$table_met = Constants::getTableMet();
$main_met = Constants::getMainMetamorphic();
$sec_met = Constants::getSecMetamorphic();
$comp = Constants::getComposition();
$texture = Constants::getTexture();
$metamorphism = Constants::getMetamorphism();
$facies = Constants::getFacies();
$protolith = Constants::getProtolith();

$table_mag = Constants::getTableMag();
$main_mag = Constants::getMainMagmatic();
$sec_mag = Constants::getSecMagmatic();
$chryst = Constants::getChryst();
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
$alcalinity = Constants::getAlkalinity();

//checar se db já existe, se existe mostrar mensagem de alerta

$sql = "CREATE DATABASE IF NOT EXISTS $database";
$connection = mysqli_connect($local, $user, $passwd) or die(mysql_error($connection));
mysqli_query($connection, $sql) or die(mysqli_error($connection));
mysqli_select_db($connection, $database) or die(mysqli_error($connection));

$sql = "CREATE TABLE $table_met ("
        . "id MEDIUMINT NOT NULL AUTO_INCREMENT,"
        . "$name CHAR(255) NOT NULL, "
        . "$main_met TEXT, "
        . "$structure TEXT, "
        . "$sec_met TEXT, "
        . "$comp TEXT, "
        . "$texture TEXT, "
        . "$metamorphism TEXT, "
        . "$facies TEXT, "
        . "$protolith TEXT,"
        . "$description TEXT,"
        . "PRIMARY KEY (id)"
        . ")";
mysqli_query($connection, $sql) or die(mysqli_error($connection));

$sql = "CREATE TABLE $table_mag ("
        . "id MEDIUMINT NOT NULL AUTO_INCREMENT,"
        . "$name CHAR(255) NOT NULL,"
        . "$main_mag TEXT, "
        . "$sec_mag TEXT, "
        . "$structure TEXT, "
        . "$chryst TEXT, "
        . "$visibility TEXT, "
        . "$size TEXT, "
        . "$relative_size TEXT, "
        . "$geometry TEXT, "
        . "$articulation TEXT, "
        . "$framework TEXT, "
        . "$acidity TEXT, "
        . "$saturation TEXT, "
        . "$feldspars TEXT, "
        . "$color_index TEXT, "
        . "$alumina TEXT, "
        . "$alcalinity TEXT, "
        . "$description TEXT,"
        . "PRIMARY KEY (id))";
mysqli_query($connection, $sql) or die(mysqli_error($connection));

mysqli_close($connection);