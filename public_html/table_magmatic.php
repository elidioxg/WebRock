<?php

include '../resources/constants.php';
include '../resources/constants_eng.php';
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

echo "<label id ='title'>".Strings::strMagRock()."</label>";
echo '<table id="tbrock" border="1">';
echo '    <tr>';
echo '        <td> <label id="tableTitle">'.Strings::getName().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getMainMagmatic().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getSecMagmatic().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getStructure().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getChrystalline().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getVisibility().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getSize().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getRelativeSize().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getGeometry().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getArticulation().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getFramework().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getAcidity().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getSaturation().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getFeldspars().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getColorIndex().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getAlumina().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getAlcalinity().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getDescription().'</label></td>';
echo '    </tr>';
while ($results = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "  <td>";
    echo "    <form method='POST' action='/WebRocks/public_html/modify_magmatic.php'>";
    echo "      <input type='submit' value='".$results[$name]."' name='rock_name' id='btrock'>"; 
    echo "    </form>";
    echo "  </td>";
    //echo "  <td> <a href='modify_magmatic.php?rock='$results[$name]' id='btrock'> $results[$name]</a></td>";
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
?>



