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

$connection = mysql_connect($local, $user, $passwd) or print(mysql_error());
mysql_select_db($database, $connection) or print mysql_error();
mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");

$sql = "SELECT * FROM $table ORDER BY $name ASC;";
$result = mysql_query($sql, $connection);
$i = 0;

echo '<table border="1">';
echo '    <tr>';
echo '        <td> Name</td>';
echo '        <td> Main Mineralogy</td>';
echo '        <td> Secondary Mineralogy</td>';
echo '        <td> Structure</td>';
echo '        <td> Chrystalline</td>';
echo '        <td> Visibility</td>';
echo '        <td> Size</td>';
echo '        <td> Relative Size</td>';
echo '        <td> Geometry</td>';
echo '        <td> Articulation</td>';
echo '        <td> Framework</td>';
echo '        <td> Acidity</td>';
echo '        <td> Saturation</td>';
echo '        <td> Feldspars</td>';
echo '        <td> Color Index</td>';
echo '        <td> Alumina</td>';
echo '        <td> Alkalinity</td>';
echo '        <td> Description</td>';
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
}
echo '</table> ';

