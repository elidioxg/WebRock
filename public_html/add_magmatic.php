<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Magmatic Rock</title>
    </head>
    <body>
        <form method="POST" action="add_magmatic_sql.php">
            <table >
                <tr>
                    <td> <label> Name</label> </td>
                    <td> <input type="text" name="fieldName" id="field"></td>
                </tr>
                <tr>
                    <td> <label> Main Mineralogy</label></td>
                    <td> <input type="text" name="fieldMain" id="field"></td>
                </tr>
                <tr>
                    <td> <label> Secondary Mineralogy</label></td>
                    <td> <input type="text" name="fieldSec" id="field"></td>
                </tr>
                <tr>
                    <td> <label> Structure</label></td>
                    <td> <input type="text" name="fieldStruc" id="field"></td>
                </tr>
                <tr>
                    <td> <label> Chrystalline</label></td>
                    <td> <input type="text" name="fieldChr" id="field"></td>
                </tr>
                <tr>
                    <td> <label> Visibility</label></td>
                    <td> <input type="text" name="fieldVis" id="field5"></td>
                </tr>
                <tr>
                    <td> <label> Size</label></td>
                    <td> <input type="text" name="fieldSize" id="field"></td>
                </tr>
                <tr>
                    <td> <label> relative_size</label></td>
                    <td> <input type="text" name="fieldRel" id="field"></td>
                </tr>
                <tr>
                    <td> <label> geometry</label></td>
                    <td> <input type="text" name="fieldGeo" id="field"></td>
                </tr>
                <tr>
                    <td> <label> Articulation</label></td>
                    <td> <input type="text" name="fieldArt" id="field"></td>
                </tr>
                <tr>
                    <td> <label> framework</label></td>
                    <td> <input type="text" name="fieldFram" id="field"></td>
                </tr>
                <tr>
                    <td> <label> acidity</label></td>
                    <td> <input type="text" name="fieldAcid" id="field"></td>
                </tr>
                <tr>
                    <td> <label> saturation</label></td>
                    <td> <input type="text" name="fieldSat" id="field"></td>
                </tr>
                <tr>
                    <td> <label> Feldspars</label></td>
                    <td> <input type="text" name="fieldFel" id="field"></td>
                </tr>
                <tr>
                    <td> <label> Color Index</label></td>
                    <td> <input type="text" name="fieldColor" id="field"></td>
                </tr>
                <tr>
                    <td> <label> Alumina</label></td>
                    <td> <input type="text" name="fieldAlumina" id="field"></td>
                </tr>
                <tr>
                    <td> <label> Alkalinity</label></td>
                    <td> <input type="text" name="fieldAlk" id="field"></td>
                </tr>
                <tr>
                    <td> <label> Description</label></td>
                    <td> <input type="text" name="fieldDes" id="field"></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type='submit' value='Add' id='add' name='add'>
                        <input type='submit' value='Clear' id='clear' name='clear'>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

