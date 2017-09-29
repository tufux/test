<!DOCTYPE html>
<?php
    include 'inc/functions.php';
?>
<html>
    <head>
        <title> </title>
        <style>
            @import url("css/css.css");
        </style>
    </head>
    <body>
        <div id="main">
            <?php
                play();
              
                for ($i = 0; $i < 4; $i++) {
                    echo '<div class="player">';
                    echoPlayer($i);
                    echoPlayerHand($i);
                    echoPlayerHandValue($i);
                    echo "</div>";
                }
                
                echo '<div class="results"><h2>WINNER: '. winnerName() . ' with ' . winnerPoints() . ' points</h2> </div>';
            ?>
        </div>
    </body>
</html>