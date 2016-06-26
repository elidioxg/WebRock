<table>
    <tr>
        <td colspan="4">
            <?php include './header.php'; ?>
        </td>
    </tr>
    <tr>
        <td> <?php 
            $_SESSION['rock_type'] = 'metamorphic';
            include  './panel_metamorphic.php';  
            ?> 
        </td>
        <td colspan="3">             
            <?php include './table_metamorphic.php' ?>
        </td>        
    </tr>
    <tr>
        <td colspan="4">
            <?php include './footer.php'; ?>
        </td>
    </tr>
</table>