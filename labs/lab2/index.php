<?php


$score = ($_GET['score']);
function reroll()
{
    global $slot1;
    global $slot2;
    global $slot3;
    
    $slot1 = rand(0,3);
    $slot2 = rand(0,3);
    $slot3 = rand(0,3);
}



?> 
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <title>Slot Machine</title>
    </head>
    <body>
        <div id="main">
        <?php
        reroll();
        echo '<img id="reel1" src="img/'. $slot1 . '.png" alt="slot1" width="100">';
        echo '<img id="reel2" src="img/'. $slot2 . '.png" alt="slot2" width="100">';
        echo '<img id="reel3" src="img/'. $slot3 . '.png" alt="slot3" width="100"    >';
        echo '<div id="output">';
        if($slot1 == $slot2 && $slot2 == $slot3)
        {
            if($slot1 == 0)
            {
                echo '<p>you win 250</p>';
            $score = $score +250;
                
            }
            elseif($slot2 == 1)
            {
                echo '<p>you win 500</p>';
                $score = $score +500;
            }
            elseif($slot1 == 2)
            {
                echo '<h1>JACKPOT</h1> <br> <p>you win 1000</p>';
                
                $score = $score +1000;
                echo '
                <audio src="jackpot.mp3" autoplay>
                        Your browser does not support the <code>audio</code> element.
                </audio>';
            }
            elseif($slot1 == 3)
            {
                echo '<p>you win 900</p>';
                $score = $score +900;
            }
            
        }
        else
            {
                echo '<p>Try again!</p>';
            }
        echo '<h1>Your score: ' . $score . '</h1></div>';
        echo '<br><br><div id="input"><a href="index.php?score=' . $score . '">SPIN!</a></div>';
        ?>
        </div>
    </body>
</html>