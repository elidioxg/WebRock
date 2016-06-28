<html>
    <head>
        <meta charset="utf-8">
        <title>Modify Magmatic Rock</title>
    </head>
    <body>
        <form method="POST" action="modify_magmatic_sql.php">
            <?php
            include '../resources/constants.php';
            header('Content-Type: text/html; charset=UTF-8');
                       
            $valueName = $_GET['rock'];            
            
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
            echo "         <td> <label> Name</label> </td>";
            echo '        <td> <input type="text" name="field1" id="field1"value="' . $results[$name] . '"> <br></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> Main Mineralogy</label></td>";
            echo '         <td> <input type="text" name="field2" id="field2"value="' . $results[$mineralogy] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> Secondary Mineralogy</label></td>";
            echo '         <td> <input type="text" name="field3" id="field3"value="' . $results[$secondary] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> Structure</label></td>";
            echo '         <td> <input type="text" name="field3" id="field3"value="' . $results[$structure] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> Chrystalline</label></td>";
            echo '         <td> <input type="text" name="field4" id="field4"value="' . $results[$chrystal] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> Visibility</label></td>";
            echo '         <td> <input type="text" name="field5" id="field5"value="' . $results[$visibility] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> Size</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$size] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> retlative_size</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$relative_size] . '"></td>';
            echo '     </tr>';
            echo "     <tr>";
            echo "         <td> <label> geometry</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$geometry] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> Articulation</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$articulation] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> framework</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$framework] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> acidity</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$acidity] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> saturation</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$saturation] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> Feldspars</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$feldspars] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> color_index</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$color_index] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> Alumina</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$alumina] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> Alkalinity</label></td>";
            echo '         <td> <input type="text" name="field" id="field"value="' . $results[$alkalinity] . '"></td>';
            echo "     </tr>";
            echo "     <tr>";
            echo "         <td> <label> Description</label></td>";
            echo '        <td> <input type="text" name="field" id="field"value="' . $results[$description] . '"></td>';
            echo "     </tr>";
            echo " </table>";
            ?>
            <input type="submit" value="Modify" id="modify_mag">
        </form>    
    </body>    
</html>

