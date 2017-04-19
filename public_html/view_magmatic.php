<form method="POST" action="view_magmatic.php">
    <select name="mag_rock">
        <?php
        $valueName = filter_input(INPUT_POST, 'mag_rock');
        echo "<option value='" . $valueName . "'>" . $valueName . "</option>";

        include "../resources/constants.php";

        $user = Constants::getUser();
        $local = Constants::getLocal();
        $passwd = Constants::getPasswd();
        $database = Constants::getDatabase();
        $table = Constants::getTableMag();

        $name = Constants::getName();

        $connection = mysqli_connect($local, $user, $password, $database)
                or die(mysqli_connect_error($connection));
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
    <input type="submit" value="View" id="view" name="view"> 
</form>
<?php
if (!empty($valueName)) {
    include "../resources/constants_eng.php";
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
    
    $sql = 'SELECT * FROM ' . $table . ' WHERE ' . $name . '="' . $valueName . '"';
    $result = mysqli_query($connection, $sql) or die(mysqli_error());
    if (mysqli_num_rows($result) > 0) {
        $results = mysqli_fetch_array($result);
        echo '<table border="1">';
        echo '  <tr>';
        echo '    <td> ' . Strings::getMainMagmatic() . '</td>';
        echo '    <td> ' . $results[$mineralogy] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getSecMagmatic() . '</td>';
        echo '    <td> ' . $results[$secondary] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getStructure() . '</td>';
        echo '    <td> ' . $results[$structure] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getChrystalline() . '</td>';
        echo '    <td> ' . $results[$chrystal] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getVisibility() . '</td>';
        echo '    <td> ' . $results[$visibility] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getSize() . '</td>';
        echo '    <td> ' . $results[$size] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getRelativeSize() . '</td>';
        echo '    <td> ' . $results[$relative_size] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getGeometry() . '</td>';
        echo '    <td> ' . $results[$geometry] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getArticulation() . '</td>';
        echo '    <td> ' . $results[$articulation] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getFramework() . '</td>';
        echo '    <td> ' . $results[$framework] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getAcidity() . '</td>';
        echo '    <td> ' . $results[$acidity] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getSaturation() . '</td>';
        echo '    <td> ' . $results[$saturation] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getFeldspars() . '</td>';
        echo '    <td> ' . $results[$feldspars] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getColorIndex() . '</td>';
        echo '    <td> ' . $results[$color_index] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getAlumina() . '</td>';
        echo '    <td> ' . $results[$alumina] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getAlcalinity() . '</td>';
        echo '    <td> ' . $results[$alcalinity] . ' </td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td> ' . Strings::getDescription() . '</td>';
        echo '    <td> ' . $results[$description] . ' </td>';
        echo '  </tr>';
        echo '</table>';
    }
}
mysqli_close($connection);