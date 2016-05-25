<?php

include '../resources/constants.php';
header('Content-Type: text/html; charset=UTF-8');
$user = Constants::getUser();
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
mysql_select_db($table, $connection) or print mysql_error();
mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");

$sql = "SELECT * FROM $table ORDER BY $name ASC;";
$result = mysql_query($sql, $connection);
$i = 0;

echo '<table border="1">';
echo '    <tr>';
echo '        <td>Name</td>';
echo '        <td> Main Mineralogy</td>';
echo '        <td> Secondary Mineralogy</td>';
echo '        <td> Composition</td>';
echo '        <td> Structure</td>';
echo '        <td> Texture</td>';
echo '        <td> Metamorphism</td>';
echo '        <td> Facies</td>';
echo '        <td> Protolith</td>';
echo '        <td> Description</td>';
echo '    </tr>';
while ($results = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "  <td> <a href='' > $results[$name]</a></td>";
    echo "  <td> $results[$main] </td>";
    echo "  <td> $results[$sec]</td>";
    echo "  <td> $results[$composition]</td>";
    echo "  <td> $results[$structure]</td>";
    echo "  <td> $results[$texture]</td>";
    echo "  <td> $results[$metamorphism]</td>";
    echo "  <td> $results[$facies]</td>";
    echo "  <td> $results[$protolith]</td>";
    echo "  <td> $results[$description]</td>";
    echo "</tr>";
}
echo '</table>';

