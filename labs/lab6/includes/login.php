<?PHP
session_start();
?>
<form action="includes/login2.php" method="POST">
    <div>
        <input type = "Text" VALUE ="username" name = "username">
    </div>
    <div>
        <input type = "Text" VALUE ="pw" name = "pw">
    </div>
    <div>
        <input type = "submit" VALUE ="Submit">
    </div>
    <div>
        <input type="hidden" value="REAL_REQUEST" />
    </div>
</form>