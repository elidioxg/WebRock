
<form method="POST" action="view_metamorphic.php">
    <select name="met_rock">
        <?php
        $valueName = filter_input(INPUT_POST, 'met_rock');
        echo $valueName;
        echo "<option value='" . $valueName . "'>" . $valueName . "</option>";

        include "../resources/constants.php";

        $user = Constants::getUser();
        $local = Constants::getLocal();
        $passwd = Constants::getPasswd();
        $database = Constants::getDatabase();
        $table = Constants::getTableMet();

        $name = Constants::getName();

        $connection = mysqli_connect($local, $user, $passwd) or die(mysqli_connect_error());
        mysqli_select_db($connection, $database) or die(mysqli_error());
        mysqli_query("SET NAMES 'utf8'");
        mysqli_query("SET character_set_connection=utf8");
        mysqli_query("SET character_set_client=utf8");
        mysqli_query("SET character_set_results=utf8");

        $sql = "SELECT $name FROM $table ORDER BY $name ASC;";
        $result = mysqli_query($connection, $sql) or die(mysqli_error());
        while ($results = mysqli_fetch_array($result)) {
            if ($valueName != $results[$name]) {
                echo "<option value='" . $results[$name] . "'>" . $results[$name] . "</option>";
            }
        }
        ?>
    </select>
    <input type="submit" value="Modify" id="modify" name="modify"> 
</form>
<?php
if (!empty($valueName)) {
    include "../resources/constants_eng.php";
    $main = Constants::getMainMetamorphic();
    $sec = Constants::getSecMetamorphic();
    $struc = Constants::getStructure();
    $comp = Constants::getComposition();
    $texture = Constants::getTexture();
    $meta = Constants::getMetamorphism();
    $facies = Constants::getFacies();
    $proto = Constants::getProtolith();
    $desc = Constants::getDescription();

    $sql = 'SELECT * FROM ' . $table . ' WHERE ' . $name . '="' . $valueName . '"';
    $result = mysqli_query($connection, $sql) or die(mysqli_error());    
    if (mysqli_num_rows($result) > 0) {
        $results = mysqli_fetch_array($result);
        echo '<table border="1">';
        echo '  <tr>';
        echo '    <td> ' . Strings::getMainMetamorphic() . '</td>';
        echo '    <td> '.$results[$main] .' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getSecMetamorphic() . '</td>';
        echo '    <td> '.$results[$sec].' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getStructure() . '</td>';
        echo '    <td> '.$results[$struc].' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getComposition() . '</td>';
        echo '    <td> '.$results[$comp].' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getTexture() . '</td>';
        echo '    <td> '.$results[$texture].' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getMetamorphism() . '</td>';
        echo '    <td> '.$results[$meta].' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getFacies() . '</td>';
        echo '    <td> '.$results[$facies].' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getProtolith() . '</td>';
        echo '    <td> '.$results[$proto].' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getDescription() . '</td>';
        echo '    <td> '.$results[$desc].' </td>';
        echo '  </tr>';
        echo '</table>';
    }
}
mysqli_close($connection);
