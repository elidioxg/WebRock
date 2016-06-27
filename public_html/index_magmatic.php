<table>
    <tr>
        <td colspan="4"> <?php include './header.php'; ?></td>
    </tr>
    <tr>
        <td> <?php 
            $_SESSION['rock_type'] = 'magmatic';            
            include './panel_magmatic.php';
            ?> 
        </td>
        <td colspan="3">                    
            <?php include './table_magmatic.php' ?>
        </td>        
    </tr>
    <tr>
        <td colspan="4">
            <?php include './footer.php'; ?>
        </td>
    </tr>
</table>
