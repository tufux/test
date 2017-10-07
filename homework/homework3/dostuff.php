<!DOCTYPE HTML>
<html>
<head>
<title>Assignment 3</title>
<meta charset="UTF-8">
<link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
session_start(); 


if($_POST["check"] == "check")
{
    echo "YOU CLICKED THE CHECKBOX";
}
else
{
    echo "YOU DIDN'T CLICKED THE CHECKBOX";
}

echo "<br>";

if($_POST["rb"] == "rb1")
{
    echo "YOU CLICKED RADIOBUTTON 1!!!";
}
else if($_POST["rb"] == "rb2")
{
    echo "YOU CLICKED RADIOBUTTON2! YAY";
}
else
{
    echo "OH NOOOO, YOU DIDN'T CLICK THE RADIOBUTTONS!";
}
echo "<br>";
if($_POST["number"] != "")
{
    echo 'YOU TYPED IN '. $_POST["number"];
}
else
{
    echo "YOU DIDN'T WRITE IN A NUMBER! ON NOOOES";
}
echo "<br>";
if($_POST["textbox"] != "")
{
    echo "YOU WROTE " . $_POST["textbox"];
}
else
{
    echo "YOU DIDN'T WRITE ANYTHING IN THE TEXTBOX!";
}
echo "<br><br>";
if($_POST["check"] != "check")
{
    echo "TOO BAD YOU DIDN'T CLICK THAT CHECKBOX";
}
else
{
    if($_POST["rb"] != "rb2")
    {
       echo "TOO BAD YOU DIDN'T CLICK RADIOBUTTON 2!"; 
    }
    else
    {
        if($_POST["number"] != "55")
        {
            echo "TOO BAD YOY DIDN'T TYPE IN 55 IN THE NUMBERS BOX";
        }
        else
        {
            if($_POST["textbox"] != "ZOOMIES")
            {
                echo 'TOO BAD YOU DIDN´T WRITE: "ZOOMIES" IN THE TEXTBOX' ;
            }
            else
            {
                echo "YOU DID IT!";
                header( "refresh:3;url=https://gfycat.com/SereneValidAnemonecrab" );
            }
        }
    }
}
?>

</body>
</html>