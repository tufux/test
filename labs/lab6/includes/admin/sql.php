<?php
session_start();
$host = 'localhost';
$dbname = 'Users';
$username = 'php';
$password = 'php';
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 


if($_POST['what'] == 'add')
{
    try{
   $one =  $_POST['firstname'];
   $two =  $_POST['lastname'];
   $three =  $_POST['username'];
   $four =  password_hash($_POST['password'], PASSWORD_DEFAULT);
   $five =  $_POST['info'];
   $six =  $_POST['power'];
   $sql ="INSERT INTO `Users`.`user` VALUES ('NULL', '$one', '$two', '$three', '$four', '$five', '$six')";
   $stmt = $conn -> prepare ($sql);
   $stmt -> execute ();
    }
    catch(Exeption $e){
        echo "username already taken";
        header("Location: add.php");
    }
}
if($_POST['what'] == 'edit')
{
    try{
   $one =  $_POST['firstname'];
   $two =  $_POST['lastname'];
   $three =  $_POST['username'];
   $seven =  $_POST['username2'];
   $four =  password_hash($_POST['password'], PASSWORD_DEFAULT);
   $five =  $_POST['info'];
   $six =  $_POST['power'];
   $sql = "UPDATE `user` SET `firstname`='$one',`lastname`='$two',`username`='$seven',`password`='$four',`info`='$five',`power`=$six WHERE username = '$three'";
   var_dump($sql);
   $stmt = $conn -> prepare ($sql);
   $stmt -> execute ();
    }
    catch(Exeption $e){
        echo "username already taken";
        header("Location: add.php");
    }
}

if($_POST['what'] == 'delete')
{
    if($_POST['button'] == "yes")
    {
   $one =  $_POST['username'];
   $sql ="DELETE FROM `user` WHERE username = '$one'";
   $stmt = $conn -> prepare ($sql);
   $stmt -> execute ();
    }
   if($_POST['button'] == "no")
   {
       header("Location: ../../index.php");
   }
}
echo '<a href="../../index.php">back</a>';
?>