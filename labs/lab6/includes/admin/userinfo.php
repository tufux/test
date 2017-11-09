<?php

session_start();

    if($_SESSION['power'] != 1 ){
        header("Location: ../../index.php");
    }
    else
    {
        echo "This is the userinfo panel <br>";
        echo '<a href="../../index.php">Back</a>';
        echo "<br><br>";
    }

$host = 'localhost';
$dbname = 'Users';
$username = 'php';
$password = 'php';
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $temp = $_GET['user'];
   $sql ="SELECT * FROM `user` WHERE username = '$temp'";
   $stmt = $conn -> prepare ($sql);
   $stmt -> execute ();
while ($row = $stmt -> fetch())  {
   echo  "Username: " . $row['username'] ;
   echo "<br>";
   echo  "First name: " . $row['firstname'] ;
   echo "<br>";
   echo  "Last name: " . $row['lastname'] ;
   echo "<br>";
   echo  "Power level : " . $row['power'] ;
   echo "<br>";
   echo  "Information: " . $row['info'] ;
   echo "<br>";
}
?>