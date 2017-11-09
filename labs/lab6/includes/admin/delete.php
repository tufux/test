<?php
session_start();

    if($_SESSION['power'] != 1 ){
        header("Location: .../index.php");
    }
    else
    {
        echo "This is the deletion panel <br>";
        echo '<a href="../../index.php">Back</a>';
    }
?>
<html>
<body>
    
    <form action="areyousure.php" method="POST">
        <div>
            <input type = "Text" VALUE ="username" name = "username">
        </div>
        <div>
            <input type = "submit" VALUE ="Submit">
        </div>
        <div>
            <input type="hidden" value="delete" name = "what" />
        </div>
    </form>
</body>
</html>