<html>
    <head>
        <meta charset="utf-8">
        <title>Modify Metamorphic Rock</title>
    </head>
    <body>
        <form method="POST" action="modify_metamorphic_sql.php">

            <?php
            include '../resources/constants.php';
            include '../resources/constants_eng.php';
            header('Content-Type: text/html; charset=UTF-8');

            $valueName = $_GET['rock'];

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
            mysql_select_db($database, $connection) or die(mysql_error());
            mysql_query("SET NAMES 'utf8'");
            mysql_query("SET character_set_connection=utf8");
            mysql_query("SET character_set_client=utf8");
            mysql_query("SET character_set_results=utf8");

            $sql = "SELECT * FROM $table WHERE $name='$valueName' ;";
            $result = mysql_query($sql, $connection) or die(mysql_error());
            $results = mysql_fetch_array($result);

            echo "            <table>";
            echo "                <tr>";
            echo "                    <td> <label>".Strings::getName()."/label></td>";
            echo '                    <td> <input type="text" name="field1" id="field1" value="' . $results[$name] . '"></td>';
            echo "                </tr>";
            echo "                <tr>";
            echo "                    <td> <label>".Strings::getMainMetamorphic()."</label></td>";
            echo '                    <td> <textarea type="text" name="field2"id="field2" value="' . $results[$main] . '"></textarea></td>';
            echo "                </tr>";
            echo "                <tr>";
            echo "                    <td> <label>".Strings::getSecMetamorphic()."</label></td>";
            echo '                    <td> <textarea type="text" name="field3"id="field3" value="' . $results[$sec] . '"></textarea></td>';
            echo "                </tr>";
            echo "                <tr>";
            echo "                    <td> <label> ".Strings::getComposition()."</label> </td>";
            echo '                    <td> <input type="text" name="field4"id="field4" value="' . $results[$composition] . '"></td>';
            echo "                </tr>";
            echo "                <tr>";
            echo "                    <td> <label> ".Strings::getStructure()."</label></td>";
            echo '                    <td> <input type="text" name="field5" id="field5" value="' . $results[$structure] . '"></td>';
            echo "                </tr>";
            echo "                <tr>";
            echo "                    <td> <label>".Strings::getTexture()."</label></td>";
            echo '                    <td> <input type="text" name="filed6" id="field6" value="' . $results[$texture] . '"></td>';
            echo "                </tr>";
            echo "                <tr>";
            echo "                    <td> <label>".Strings::getMetamorphism()."</label></td>";
            echo '                    <td> <input type="text" name="field7" id="field7" value="' . $results[$metamorphism] . '"></td>';
            echo "                </tr>";
            echo "                <tr>";
            echo "                    <td> ".Strings::getFacies()."</td>";
            echo '                    <td> <input type="text" name="field8" id="field8" value="' . $results[$facies] . '" ></td>';
            echo "                </tr>";
            echo "                <tr>";
            echo "                    <td> ".Strings::getProtolith()."</td>";
            echo '                    <td> <input type="text" name="field9" id="field9" value="' . $results[$protolith] . '"></td>';
            echo "                </tr>";
            echo "                <tr>";
            echo "                    <td> ".Strings::getDescription()."</td>";
            echo '                    <td> <textarea type="text" name="field10" id="field10"value="' . $results[$description] . '"></textarea></td>';
            echo "                </tr>";
            echo "            </table>";
            mysql_close($connection);
            ?>
            <input type="submit" value="Modify" id="modify" name="modify">
        </form>    
    </body>    
</html>
