<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' type='text/css' href='/public_html/css/sytle.css'>
        <title>Web Rock Admin</title>
    </head>
    <body>
        <div id='menu'>
            <ul class='' id='ul_admin'>
                <li> 
                    <form method='POST' action='./db/create_database.php'>
                        <input type="submit" value='Create Database'>
                    </form> 
                </li>        
                <li>
                    <form method="POST" action="./db/delete_database.php">
                        <input type="submit" value="Delete Database">
                    </form>
                </li>
            </ul>
        </div>
    </body>
</html>