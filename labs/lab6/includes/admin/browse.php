<?php

session_start();

    if($_SESSION['power'] != 1 ){
        header("Location: ../../index.php");
    }
    else
    {
        echo "This is the browsing panel <br>";
        echo '<a href="../../index.php">Back</a>';
        echo "<br><br>";
    }

$host = 'localhost';
$dbname = 'Users';
$username = 'php';
$password = 'php';
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

   $sql ="SELECT * FROM `user`";
   $stmt = $conn -> prepare ($sql);
   $stmt -> execute ();
    
while ($row = $stmt -> fetch())  {
   echo  '<a href="userinfo.php?user=' . $row['username'] . '">' . $row['username'] . '</a>';
   echo "<br>";
}
?>