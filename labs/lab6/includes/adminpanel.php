<?php
session_start();

    if($_SESSION['power'] != 1 ){
        header("Location: ../index.php");
    }
?>
<div class="container">
    <div>
        <a href="includes/admin/add.php">Add users</a>
    </div>
    <div>
        <a href="includes/admin/delete.php">Delete users</a>
    </div>
    <div>
        <a href="includes/admin/edit.php">Edit users</a>
    </div>
    <div>
        <a href="includes/admin/browse.php">Browse users</a>
    </div>
</div>