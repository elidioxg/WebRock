<form method="POST" action="exclude_metamorphic_sql.php">
    <input list="met_rocks" name="Exclude">
    <datalist id="met_rocks">
    <?php include '../resources/constants.php';
        header('Content-Type: text/html; charset=UTF-8');

        $user = Constants::getUser();
        $local = Constants::getLocal();
        $passwd = Constants::getPasswd();
        $database = Constants::getDatabase();
        $table = Constants::getTableMet();
        
        $name = Constants::getName();
        
        $connection = mysql_connect($local, $user, $passwd) or die(mysql_error());
        mysql_select_db($database, $connection) or die (mysql_error());
        mysql_query("SET NAMES 'utf8'");
        mysql_query("SET character_set_connection=utf8");
        mysql_query("SET character_set_client=utf8");
        mysql_query("SET character_set_results=utf8");
        
        $sql = "SELECT $name FROM $table ORDER BY $name ASC;";
        $result = mysql_query($sql, $connection) or die(mysql_error());
        
        while ($results = mysql_fetch_array($result)) {
            echo "<option value='$results[$name]'>";            
        }
   ?>
    </datalist>
    <input type="submit" value="Exclude" id="exclude" name="exclude">
</form>