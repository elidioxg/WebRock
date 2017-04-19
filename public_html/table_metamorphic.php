<?php

include '../resources/constants.php';
include '../resources/constants_eng.php';
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

$connection = mysql_connect($local, $user, $passwd) or die(mysql_error());
mysql_select_db($database, $connection) or die (mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");

$sql = "SELECT * FROM $table ORDER BY $name ASC;";
$result = mysql_query($sql, $connection);
$i = 0;

echo "<label id ='title'>".Strings::StrMetRock()."</label>";
echo '<table border="1">';
echo '    <tr>';
echo "        <td> <label id='tableTitle'>".Strings::getName()."</label></td>";
echo '        <td> <label id="tableTitle">'.Strings::getMainMetamorphic().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getSecMetamorphic().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getComposition().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getStructure().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getTexture().'</label></b>';
echo '        <td> <label id="tableTitle">'.Strings::getMetamorphism().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getFacies().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getProtolith().'</label></td>';
echo '        <td> <label id="tableTitle">'.Strings::getDescription().'</label></td>';
echo '    </tr>';
while ($results = mysql_fetch_array($result)) {
    echo "<tr>";    
    echo "  <td>";
    echo "    <form method='POST' action='/WebRocks/public_html/modify_metamorphic.php'>";
    echo "      <input type='submit' value='".$results[$name]."' name='rock_name' id='btrock'>"; 
    echo "    </form>";
    echo "  </td>";
    //echo "  <td> <a href='modify_metamorphic.php?rock=$results[$name]'> $results[$name]</a></td>";
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
    $i++;
}
echo '</table>';
mysql_close($connection);
echo "Records: $i ";

