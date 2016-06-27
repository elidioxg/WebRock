<?php

include '../resources/constants.php';
header('Content-Type: text/html; charset=UTF-8');

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
$size = Constants::getVisibility();
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

$sql = "SELECT * FROM $table ORDER BY $name ASC;";
$result = mysql_query($sql, $connection);
$i = 0;

echo '<table border="1">';
echo '    <tr>';
echo '        <td> <b>Name</b></td>';
echo '        <td> <b>Main Mineralogy</b></td>';
echo '        <td> <b>Secondary Mineralogy</b></td>';
echo '        <td> <b>Structure</b></td>';
echo '        <td> <b>Chrystalline</b></td>';
echo '        <td> <b>Visibility</b></td>';
echo '        <td> <b>Size</b></td>';
echo '        <td> <b>Relative Size</b></td>';
echo '        <td> <b>Geometry</b></td>';
echo '        <td> <b>Articulation</b></td>';
echo '        <td> <b>Framework</b></td>';
echo '        <td> <b>Acidity</b></td>';
echo '        <td> <b>Saturation</b></td>';
echo '        <td> <b>Feldspars</b></td>';
echo '        <td> <b>Color Index</b></td>';
echo '        <td> <b>Alumina</b></td>';
echo '        <td> <b>Alkalinity</b></td>';
echo '        <td> <b>Description</b></td>';
echo '    </tr>';
while ($results = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "  <td> <a href='' > $results[$name]</a></td>";
    echo "  <td> $results[$mineralogy] </td>";
    echo "  <td> $results[$secondary]</td>";
    echo "  <td> $results[$structure]</td>";
    echo "  <td> $results[$chrystal]</td>";
    echo "  <td> $results[$visibility]</td>";
    echo "  <td> $results[$size]</td>";
    echo "  <td> $results[$relative_size]</td>";
    echo "  <td> $results[$geometry]</td>";
    echo "  <td> $results[$articulation]</td>";
    echo "  <td> $results[$framework]</td>";
    echo "  <td> $results[$acidity]</td>";
    echo "  <td> $results[$saturation]</td>";
    echo "  <td> $results[$feldspars]</td>";
    echo "  <td> $results[$color_index]</td>";
    echo "  <td> $results[$alumina]</td>";
    echo "  <td> $results[$alkalinity]</td>";
    echo "  <td> $results[$description]</td>";
    echo "</tr>";
    $i++;
}
echo '</table> ';
mysql_close($connection);
echo "Records: $i ";


