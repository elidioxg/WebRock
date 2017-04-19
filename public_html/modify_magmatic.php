<html>
    <head>
        <meta charset="utf-8">
        <title>Modify Magmatic Rock</title>
    </head>
    <body>
        <form method="POST" action="modify_magmatic_sql.php">
            <?php
            include '../resources/constants.php';
            include '../resources/constants_eng.php';
            header('Content-Type: text/html; charset=UTF-8');
              
            $valueName = filter_input(INPUT_POST, 'rock_name');
            //$valueName = $_GET['rock'];            
            
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

            $connection = mysql_connect($local, $user, $passwd) or die(mysql_error());
            mysql_select_db($database, $connection) or die(mysql_error());
            mysql_query("SET NAMES 'utf8'");
            mysql_query("SET character_set_connection=utf8");
            mysql_query("SET character_set_client=utf8");
            mysql_query("SET character_set_results=utf8");

            $sql = "SELECT * FROM $table WHERE $name='$valueName' ;";
            $result = mysql_query($sql, $connection) or die(mysql_error());
            $results = mysql_fetch_array($result);
            echo "<table >";
            echo"     <tr>";
            echo "         <td> <label>".Strings::getName()."</label> </td>";
            echo '        <td> <input type="text" name="field1" id="field1"value="' . $results[$name] . '"> <br></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label>".Strings::getMainMagmatic()."</label></td>";
            echo '         <td> <textarea type="text" name="field2" id="field2">' . $results[$mineralogy] . '</textarea></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getSecMagmatic()."</label></td>";
            echo '         <td> <textarea type="text" name="field3" id="field3">' . $results[$secondary] . '</textarea></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getStructure()."</label></td>";
            echo '         <td> <input type="text" name="field3" id="field3"value="' . $results[$structure] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getChrystalline()."</label></td>";
            echo '         <td> <input type="text" name="field4" id="field4"value="' . $results[$chrystal] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getVisibility()."</label></td>";
            echo '         <td> <input type="text" name="field5" id="field5"value="' . $results[$visibility] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getSize()."</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$size] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getRelativeSize()."</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$relative_size] . '"></td>';
            echo '     </tr>';
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getGeometry()."</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$geometry] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getArticulation()."</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$articulation] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getFramework()."</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$framework] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getAcidity()."</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$acidity] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getSaturation()."</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$saturation] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getFeldspars()."</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$feldspars] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getColorIndex()."</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$color_index] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getAlumina()."</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$alumina] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getAlcalinity()."</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$alkalinity] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> ".Strings::getDescription()."</label></td>";
            echo '        <td> <textarea type="text" name="field" id="field">' . $results[$description] . '</textarea></td>';
            echo "     </tr>";
            echo " </table>";
            ?>
            <input type="submit" value="Modify" id="modify_mag">
        </form>    
    </body>    
</html>

