<!DOCTYPE HTML>
<?PHP

?>
<html>
    <head>
        
    </head>
    <body>
        <?PHP
        session_start();
            if($_SESSION['user'] == '')
            {
                include "includes/login.php";
            }
            else
            {
                if($_SESSION['power'] = 1 ){
                    include "includes/adminpanel.php";
                }
                else
                {
                    echo "Welcome " .  $_SESSION['user'];    
                }
                
            }
            
        ?>
    </body>
</html>