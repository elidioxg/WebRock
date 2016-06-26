<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Metamorphic Rock</title>
    </head>
    <body>
        <form method="POST" action="insert_metamorphic.php">
            <table>
                <tr>
                    <td> <label>Name</label></td>
                    <td> <input type="text" name="field1" id="field1"></td>
                </tr>
                <tr>
                    <td> <label>Main Mineralogy</label></td>
                    <td> <textarea type="text" rows="5" name="field2"id="field2"></textarea></td>
                </tr>
                <tr>
                    <td> <label>Secondary Mineralogy</label></td>
                    <td> <textarea type="text" rows="5"name="field3"id="field3"></textarea></td>
                </tr>
                <tr>
                    <td> <label> Composition</label> </td>
                    <td> <input type="text" name="field4"id="field4"></td>
                </tr>
                <tr>
                    <td> <label> Structure</label></td>
                    <td> <input type="text" name="field5" id="field5"></td>
                </tr>
                <tr>
                    <td> <label>Texture</label></td>
                    <td> <input type="text" name="field6" id="field6"></td>
                </tr>
                <tr>
                    <td> <label>Metamorphism</label></td>
                    <td> <input type="text" name="field7" id="field7"></td>
                </tr>
                <tr>
                    <td> <label>Facies</label></td>
                    <td> <input type='text' name='field8' id='field8'></td>
                </tr>
                <tr>
                    <td> <label>Protolith</label></td>
                    <td> <input type='text' name='field9' id='field9'></td>
                </tr>
                <tr>
                    <td> <label>Description</label></td>
                    <td> <textarea type="text" rows="5" name="field10" id='field10'></textarea></td>
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
