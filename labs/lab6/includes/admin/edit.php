<?php
session_start();

    if($_SESSION['power'] != 1 ){
        header("Location: ../../index.php");
    }
    else
    {
        echo "This is the adding panel <br>";
        echo '<a href="../../index.php">Back</a>';
    }
?>
<html>
<body>
    
    <form action="sql.php" method="POST">
        <div>
            <input type = "Text" VALUE ="old username" name = "username">
        </div>
        <br>
         <div>
            <input type = "Text" VALUE ="new username" name = "username2">
        </div>
        <div>
            <input type = "Text" VALUE ="password" name = "password">
        </div>
        <div>
            <input type = "Text" VALUE ="firstname" name = "firstname">
        </div>
        <div>
            <input type = "Text" VALUE ="lastname" name = "lastname">
        </div>
        <div>
            <input type = "Text" VALUE ="info" name = "info">
        </div>
          <div>
            <input type = "Text" VALUE ="0" name = "power"><p>If the user is admin, type 1 here</p>
        </div>
        
        <div>
            <input type = "submit" VALUE ="Submit">
        </div>
        <div>
            <input type="hidden" value="edit" name = "what" />
        </div>
    </form>
</body>
</html>