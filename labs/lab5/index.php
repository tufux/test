<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5</title>
        <meta charset="UTF-8">
        <link href="css.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    
    <form action="index.php" method="POST">
        <div>
            <?php
            if ($_POST['filter_type'] == 'filter_type')
            {
                
                echo '<input type = "checkbox" VALUE ="filter_type" name = "filter_type" checked>';
            }
            else
                echo '<input type = "checkbox" VALUE ="filter_type" name = "filter_type">';
            ?>
            <p>Filter type</p>
        </div>
         <div>
             <?php
             if ($_POST['filter_name'] == 'filter_name')
            {
                
                echo '<input type = "checkbox" VALUE ="filter_name" name = "filter_name" checked>';
            }
            else
                echo '<input type = "checkbox" VALUE ="filter_name" name = "filter_name">';
            ?>
            <p>Filter name</p>
        </div>
        <div>
            <?php
            if ($_POST['filter_status'] == 'filter_status')
            {
                
                echo '<input type = "checkbox" VALUE ="filter_status" name = "filter_status" checked>';
            }
            else
                echo '<input type = "checkbox" VALUE ="filter_status" name = "filter_status">';
            ?>
            <p>Filter status</p>
        </div>
            <div>
            <input type = "radio" VALUE ="rb1" name = "rb"> sort by name<br>
            <input type = "radio" value ="rb2" name = "rb"> sort by price
        </div>
        <div>
            <input type = "submit" VALUE ="Submit">
        </div>
        <div>
            <input type="hidden" value="ja" name="visited" />
        </div>
    </form>
</body>
<?php

/*
1) All devices are initially displayed, ordered by name (20pts)
2) Devices are filtered by type  (15pts)
3) Devices are filtered by name  (20pts)
4) Devices are filtered by availability (15pts)
5) Devices are sortable by  name or price (20pts)
6) There is an external CSS file (10pts)
*/



$host = "localhost";
$dbname = "tech_checkout";
$username = "php";
$password = "php";

$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 


             

$sql = "SELECT * FROM `device`  ORDER BY deviceName DESC";
if($_POST['rb'] == 'rb2')
{
        $sql = "SELECT * FROM `device`  ORDER BY price DESC";     
}

$stmt = $dbConn -> prepare ($sql);
$stmt -> execute (  array ( ':id' => '1')  );

$temp_type = $_POST['filter_type'];
$temp_name = $_POST['filter_name'];
$temp_status = $_POST['filter_status'];


if($_POST['visited'] != 'ja')
{
    $temp_type = 'filter_type';
}   



echo "<div>";
while ($row = $stmt -> fetch())  {
   
    if($temp_type == 'filter_type')
    {   
        echo  $row['deviceType'];
        echo " - ";
    }
    if($temp_status == 'filter_status')
    {
        echo $row['deviceName'];
        echo " - ";
    }
        if($temp_status == 'filter_status')
    {
        echo $row['status'];
    }
    echo "<br>";
}
echo "</div>";

?>

</html>