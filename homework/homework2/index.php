<?php echo '<!DOCTYPE php>';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Battleship</title>
    <link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <div class="leftDiv">
            <img src="captain.png" width="240" height="566" alt="captain"/>
        </div>
        <div class="headerimage">
            <img src="battleship.png" width="360" height="200" alt="boat"/>
        </div>
    
<?php
getRandomNumbers();
function emptyBoard()
{
    global $positionArray;
    for($i = 0; $i < 10; $i++)
    {
        for($j = 0; $j < 10; $j++)
        {
           $positionArray = array
          (
          array("$i",$j,0)
          );
        }
    }
}
emptyBoard();
function getRandomNumbers()
{
    global $x;
    global $y;
    $x = rand(0,9);
    $y = rand(0,9);
}
function getDirection($howlong)
{
    //what way does the boat face
    global $xd;
    global $yd;
    global $x;
    global $y;
    $xd = 0;
    $yd = 0;
    $howlongx = 8 - $howlong;
    $direction = rand(0,1);
    if(($x > $howlongx && $direction == 1) || ($y > $howlongx) && $direction == 0)
    {
           header("Refresh:0");
    }
    switch($direction)
    {
        case 0 : $yd = 1;break;
        case 1 : $xd = 1;break;
    }
}
function placeboat4block()
{
    global $xd;
    global $yd;
    global $x;
    global $y;
    global $positionArray;
    getRandomNumbers();
    getDirection(4);
    $testx1 = $x+$xd;
    $testx2 = $x+$xd+$xd;
    $testx3 = $x+$xd+$xd+$xd;
    $testy1 = $y+$yd;
    $testy2 = $y+$yd+$yd;
    $testy3 = $y+$yd+$yd+$yd;
    if($positionArray[$x][$y] == 0 && $positionArray[$testx1][$testy1] == 0 && $positionArray[$testx2][$testy2] == 0 && $positionArray[$testx3][$testy3] == 0 )
    {
        $positionArray[$testx3][$testy3] = 1;
        $positionArray[$testx2][$testy2] = 1;
        $positionArray[$testx1][$testy1] = 1;
        $positionArray[$x][$y] = 1;
    }
    else
    {
        placeboat4block();
    }
}
function placeboat3block()
{
    global $xd;
    global $yd;
    global $x;
    global $y;
    global $positionArray;
    getRandomNumbers();
    getDirection(3);
    $testx1 = $x+$xd;
    $testx2 = $x+$xd+$xd;
    $testy1 = $y+$yd;
    $testy2 = $y+$yd+$yd;
    if($positionArray[$x][$y] == 0 && $positionArray[$testx1][$testy1] == 0 && $positionArray[$testx2][$testy2] == 0 && $positionArray[$testx3][$testy3] == 0 )
    {
        $positionArray[$testx2][$testy2] = 1;
        $positionArray[$testx1][$testy1] = 1;
        $positionArray[$x][$y] = 1;
    }
    else
    {
        placeboat3block();
    }
}
function placeboat2block()
{
    global $xd;
    global $yd;
    global $x;
    global $y;
    global $positionArray;
    getRandomNumbers();
    getDirection(2);
    $testx1 = $x+$xd;
    $testy1 = $y+$yd;
    if($positionArray[$x][$y] == 0 && $positionArray[$testx1][$testy1] == 0 && $positionArray[$testx2][$testy2] == 0 && $positionArray[$testx3][$testy3] == 0 )
    {
        $positionArray[$testx1][$testy1] = 1;
        $positionArray[$x][$y] = 1;
    }
    else
    {
        placeboat2block();
    }
}
placeboat4block();
placeboat3block();
placeboat2block();
echo '<div class="row">';
for($i = 0; $i < 10; $i++)
{
    for($j = 0; $j < 10; $j++)
    {
        echo '<div class="col" '; 
        if($positionArray[$i][$j] == 1)
        {
            echo 'style="background-color:black;"';
        }
        echo '>';
        echo '</div>';
    }
    echo '<br>';
}
?>  
</div>
</div>
</body>
</html>
