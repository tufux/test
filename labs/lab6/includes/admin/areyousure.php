<?php
session_start();

    if($_SESSION['power'] != 1 ){
        header("Location: .../index.php");
    }
    else
    {
        
    }
?>
<html>
<body>
    
    <form action="sql.php" method="POST">
    
        <div>
            <p>Are you sure?</p>
            <input type = "submit" VALUE ="yes" name ="button">
        </div>
              <div>
            <input type = "submit" VALUE ="no" name = "button">
        </div>
        <div>
            <?php
            echo '<input type="hidden" value="' . $_POST['username'] . '" name = "username" />';
            ?>
            <input type="hidden" value="delete" name = "what" />
        </div>
    </form>
</body>
</html>