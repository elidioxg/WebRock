<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>WebRocks - Database of Rocks</title>
        <meta name="author" content="elidioxg" >
        <meta name="keywords" 
              content="geology, geoscience, software, open, source, rock, rocks, database">
    </head>
    <body>        
        <table>
            <tr>
                <td colspan="2"> 
                    <?php include './public_html/header.php'; ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"> 
                    <?php
                    $rock_type = $_SESSION['rock_type'];
                    echo "Rock Session: $rock_type";
                    switch ($rock_type) {
                        case 'magmatic':
                            include './public_html/index_magmatic.php';
                            break;
                        case 'metamorphic':
                            include './public_html/index_metamorphic.php';
                            break;
                        default:
                            break;
                    }
                    ?> 

                </td>
            </tr>
            <tr>
                <td colspan="2"> 
                    <?php include './public_html/footer.php'; ?>
                </td>
            </tr>
        </table>
        <?php
        // put your code here
        ?>        
    </body>
</html>
