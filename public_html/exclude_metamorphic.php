<form method="POST" action="exclude_metamorphic_sql.php">
    <select name="met_rock">
        <?php
        include '../resources/constants.php';
        header('Content-Type: text/html; charset=UTF-8');

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
            echo "<option value='" . $results[$name] . "'>" . $results[$name] . "</option>";
        }
        mysqli_close($connection);
        ?>
    </select>
    <input type="submit" value="Exclude" id="exclude" name="exclude">
</form>